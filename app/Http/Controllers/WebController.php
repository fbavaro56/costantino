<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Course;
use App\Date;
use App\Http\Requests\Request;
use App\Workshop;
use Carbon\Carbon;
use http\Env\Url;
use Illuminate\Support\Facades\App;

class WebController extends Controller
{

    /**
     * @param $lang
     * @return string
     */
    public static function setLang($lang){

        switch ($lang){
            case 'es':
                $lang = 'es';
                App::setLocale($lang);
                break;
            default:
                $lang = 'en';
                App::setLocale($lang);
        }

        return $lang;
    }



    /**
     * Display public landing page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($lang = null) {

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        return view('welcome')
            ->with('active','home')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * Show workshops
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showWorkshops($lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        $dates = Date::createCurrentWeekStartEnd();

        $workshops = Workshop::all();
        foreach ($workshops as $workshop){
            Workshop::completeInfo($workshop);
        }

        return view('work_shops')
            ->with('workshops',$workshops)
            ->with('dates',$dates)
            ->with('active','workshops')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * Show workshop courses calendary
     *
     * @param $workshop_name
     * @param $from
     * @param $to
     * @return mixed
     */
    public function showCourses($workshop_name,$from,$to,$lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

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
            ->with('active','workshops')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * @param $course_id
     * @param $date
     * @param null $lang
     * @return mixed
     */
    public function showCourse($course_id,$date,$lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        $course = Course::find($course_id);

        //TODO verificar aforo y limitar cantidad de personas segun id del curso y la fecha

        return view('course_details')
            ->with('course',$course)
            ->with('date',$date)
            ->with('active','workshops')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * @param null $lang
     * @return mixed
     */
    public function bookingCourse(){

        if ($_POST['lang'] != ''){
            $lang = $_POST['lang'];
        }

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        $course = Course::find($_POST['course_id']);

        //TODO Validar datos
        //TODO Verificar Disponibilidad, aforo

        $booking = new Booking();
        $booking->course_id = $_POST['course_id'];
        $booking->date = $_POST['date'];
        $booking->name = $_POST['name'];
        $booking->email = $_POST['email'];
        $booking->phone = $_POST['phone'];
        $booking->comments = $_POST['comments'];
        $booking->adults = $_POST['adults'];
        $booking->kids = $_POST['kids'];
        $total_a = round($booking->adults*$course->price,2);
        $total_k = round($booking->kids*$course->children_price,2);
        $booking->total = $total_a + $total_k;
        $booking->save();




        //TODO avisar por email a admin

        return view('course_ok')
            ->with('course',$course)
            ->with('booking',$booking)
            ->with('total_a',$total_a)
            ->with('total_k',$total_k)
            ->with('active','workshops')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * @param null $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact($lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        return view('contact')
            ->with('active','contact')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * @param null $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about($lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        return view('about')
            ->with('active','about')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }


    /**
     * @param null $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery($lang = null){

        $lang_floor = '';

        if (isset($lang)){
            self::setLang($lang);
            $lang_floor = '_'.$lang;
        }else{
            $lang = '';
        }

        return view('gallery')->with('active','gallery')
            ->with('lang_floor',$lang_floor)
            ->with('lang',$lang);
    }

}
