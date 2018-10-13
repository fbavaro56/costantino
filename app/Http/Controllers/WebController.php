<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Course;
use App\Date;
use App\Http\Requests\Request;
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


    public function showCourse($course_id,$date){

        $course = Course::find($course_id);

        return view('course_details')
            ->with('course',$course)
            ->with('date',$date)
            ->with('active','workshops');
    }



    public function bookingCourse(){

        //TODO Validar datos
        //TODO Verificar Disponibilidad, aforo

        $booking = new Booking();
        $booking->course_id = $_POST['course_id'];
        $booking->date = $_POST['date'];
        $booking->name = $_POST['name'];
        $booking->email = $_POST['email'];
        $booking->phone = $_POST['phone'];
        $booking->comments = $_POST['comments'];
        $booking->save();

        //TODO avisar por email a admin

        return $_POST;
    }

}
