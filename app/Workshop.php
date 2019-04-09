<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public function courses(){
        return $this->hasMany('App\Course');
    }

    /**
     * Calculates workshop duration
     *
     * @param $workshop
     * @return int
     */
    public static function getDuration($workshop){
        return Carbon::parse($workshop->courses[0]->end)->diffInHours($workshop->courses[0]->start);
    }


    /**
     * Get the lower price
     *
     * @param $workshop
     * @return mixed
     */
    public static function getFromPrice($workshop){
        return Workshop::find($workshop->id)->courses()->orderBy('price','asc')->get()->first()->price;
    }


    /**
     * Complete object Info
     *
     * @param $workshop
     * @return mixed
     */
    public static function completeInfo($workshop){
        $workshop->courses = Workshop::find($workshop->id)->courses()->where('status','=',1)->get();
        if (sizeof($workshop->courses)>0) {
          $workshop->duration = Workshop::getDuration($workshop);
          $workshop->from_price = Workshop::getFromPrice($workshop);
        }else {
          $workshop->duration = 0;
          $workshop->from_price = 0;
        }

        return $workshop;
    }
}
