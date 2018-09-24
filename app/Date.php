<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    /**
     * Create current week dates
     *
     * @return array
     */
    public static function createCurrentWeekStartEnd(){
        $from = new Carbon();
        $from = $from->startOfWeek();
        $to = Carbon::parse($from);
        $to = $to->addDays(6);
        $from = $from->toDateString();
        $to = $to->toDateString();
        return [
            'from' => $from,
            'to' => $to,
            ];
    }

    /**
     * Create array with dates between to dates and find courses of workshop
     *
     * @param $from
     * @param $to
     * @return array
     */
    public static function createDatesBetweenAddCourses($from,$to,$workshop_id){


        $dates = [];
        $from = Carbon::parse($from)->addDay(-1);
        $to = Carbon::parse($to);
        $days = $to->diffInDays($from);

        for ($i=0; $i<$days; $i++){
            $from->addDay();

            $courses = Workshop::find($workshop_id)
                ->courses()
                ->where('day_of_week','=',$from->dayOfWeek)
                ->orderBy('start','asc')
                ->get();

            foreach ($courses as $course){
                Course::getHourRange($course);
                Course::setSmallHours($course);
                Course::isAvailable($course,$from->toDateString());
            }

            $dates[]=[
                'day' => $from->englishDayOfWeek,
                'day_es' => Date::dayInSpanish($from->shortEnglishDayOfWeek),
                'day_of_week' => $from->dayOfWeek,
                'date' => $from->toDateString(),
                'courses' => $courses
            ];
        }

        return $dates;
    }


    /**
     * Translate day of week for humans
     *
     * @param $short_day
     * @return string
     */
    public static function dayInSpanish($short_day){
        switch ($short_day){
            case 'Sun':
                $day_es = 'Domingo';
                break;
            case 'Mon':
                $day_es = 'Lunes';
                break;
            case 'Tue':
                $day_es = 'Martes';
                break;
            case 'Wed':
                $day_es = 'Miércoles';
                break;
            case 'Thu':
                $day_es = 'Jueves';
                break;
            case 'Fri':
                $day_es = 'Viernes';
                break;
            case 'Sat':
                $day_es = 'Sábado';
                break;
            default:
                $day_es = '';
                break;
        }
        return $day_es;
    }

}
