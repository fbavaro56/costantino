<?php

namespace App\Http\Controllers;

use App\Course;
use App\Workshop;
use Illuminate\Http\Request;

use App\Http\Requests;

class CoursesController extends Controller
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

    public function listCourses($workshop_id){

        $weekMap = [
            0 => 'DOMINGO',
            1 => 'LUNES',
            2 => 'MARTES',
            3 => 'MIÉRCOLES',
            4 => 'JUEVES',
            5 => 'VIERNES',
            6 => 'SÁBADO',
        ];

        $workshop = Workshop::find($workshop_id);
        $courses = Workshop::find($workshop_id)->courses;

        return view('admin.workshops.courses.list')
            ->with('courses',$courses)
            ->with('weekMap',$weekMap)
            ->with('workshop',$workshop);
    }


    public function create($workshop_id){

        $workshop = Workshop::find($workshop_id);

        return view('admin.workshops.courses.create')
            ->with('workshop',$workshop);
    }


    public function edit($course_id){

        $course = Course::find($course_id);
        $workshop = Workshop::find($course->workshop_id);

        return view('admin.workshops.courses.edit')
            ->with('course',$course)
            ->with('workshop',$workshop);
    }

    public function update(Request $request){
        $course = Course::find($request->input('course_id'));

        $course->title = $request->input('title');
        $course->title_es = $request->input('title_es');
        $course->quotas = $request->input('quota');
        $course->price = $request->input('price');
        $course->children_price = $request->input('children_price');
        $course->class_lang = $request->input('class_lang');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->day_of_week = $request->input('day_of_week');
        $course->status = $request->input('status');
        $course->save();

        return redirect('admin/courses/'.$course->workshop_id);
    }



    public function confirm(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'title_es' => 'required|max:255',
            'quota' => 'required',
            'price' => 'required',
            'children_price' => 'required',
            'class_lang' => 'required',
        ]);

        $course = new Course();
        $course->workshop_id = $request->input('workshop_id');
        $course->title = $request->input('title');
        $course->title_es = $request->input('title_es');
        $course->quotas = $request->input('quota');
        $course->price = $request->input('price');
        $course->children_price = $request->input('children_price');
        $course->class_lang = $request->input('class_lang');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->day_of_week = $request->input('day_of_week');
        $course->status = 1;
        $course->save();

        return redirect('admin/courses/'.$course->workshop_id);
    }

}
