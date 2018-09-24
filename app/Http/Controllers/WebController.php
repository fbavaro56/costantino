<?php

namespace App\Http\Controllers;

use App\Course;
use App\Date;
use App\Workshop;
use Carbon\Carbon;

class WebController extends Controller
{
    /**
     * Display public landing page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('welcome')
            ->with('active','home');
    }


    /**
     * Show workshops
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showWorkshops(){

        $dates = Date::createCurrentWeekStartEnd();

        $workshops = Workshop::all();
        foreach ($workshops as $workshop){
            Workshop::completeInfo($workshop);
        }

        return view('work_shops')
            ->with('workshops',$workshops)
            ->with('dates',$dates)
            ->with('active','workshops');
    }


    /**
     * Show workshop courses calendary
     *
     * @param $workshop_name
     * @param $from
     * @param $to
     * @return mixed
     */
    public function showCourses($workshop_name,$from,$to){

        $workshop = Workshop::where('name','=',$workshop_name)->get()->last();
        $workshop = Workshop::completeInfo($workshop);

        $dates = Date::createDatesBetweenAddCourses($from,$to,$workshop->id);

        $prev = [
            'from' => Carbon::parse($from)->addDays(-7)->toDateString(),
            'to' => Carbon::parse($from)->addDays(-1)->toDateString()
        ];

        $next = [
            'from' => Carbon::parse($to)->addDay()->toDateString(),
            'to' => Carbon::parse($to)->addDays(7)->toDateString()
        ];

        return view('courses')
            ->with('workshop',$workshop)
            ->with('dates',$dates)
            ->with('next',$next)
            ->with('prev',$prev)
            ->with('active','workshops');
    }
}
