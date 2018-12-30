<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Workshop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = DB::table('bookings')->orderBy('date','desc')->paginate(20);
        foreach ($bookings as $booking){
            $booking->course = Course::find($booking->course_id);
            $booking->workshop = Workshop::find($booking->course->workshop_id);
        }
        $today = new Carbon();
        return view('admin.home')
            ->with('today',$today->toDateString())
            ->with('bookings',$bookings);
    }


    public function workshops(){
        return 'Crud listado de workshops y acceso a listado de cursos de cada uno';
    }

    public function specialEvents(){

        return 'Crud listado de eventos especiales';
    }


}
