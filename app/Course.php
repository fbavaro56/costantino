<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * Calculates hour range of a course
     *
     * @param $course
     */
    public static function getHourRange($course){
        if($course->start < '14:00:00'){
            $course->hourRange = 'Morning';
        }else{
            $course->hourRange = 'Evening';
        }
    }

    public static function setSmallHours($course){
        $course->start = substr($course->start,0,5);
        $course->end = substr($course->end,0,5);
    }

    public static function isAvailable($course,$date){
        $today = new Carbon();
        if ($today->toDateString() >= $date){
            $course->isAvailable = 0;
        }else{
            $course->isAvailable = 1;
        }
    }

}
