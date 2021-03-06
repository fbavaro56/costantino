<?php

namespace App\Http\Controllers;

use App\Course;
use App\Galleryimage;
use App\Http\Requests;
use App\Workshop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        $bookings = DB::table('bookings')->orderBy('date','desc')->paginate(100);
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
        $workshops = Workshop::all();
        return view('admin.workshops.workshops')
            ->with('workshops',$workshops);
    }


    public function createWorkshop(){
        return view('admin.workshops.create');
    }

    public function confirmWorkshop(Request $request){

        $this->validate($request, [
            'name' => 'required|unique:workshops|max:255',
            'name_es' => 'required|unique:workshops|max:255',
            'img_file' => 'required|mimes:jpg,jpeg,png',
        ]);


        $workshop = new Workshop();
        $workshop->name = $request->input('name');
        $workshop->name_es = $request->input('name_es');
        $workshop->description = $request->input('description');
        $workshop->description_es = $request->input('description_es');
        $workshop->save();

        $img = Image::make($request->file('img_file'));
        $img->fit(800,600);
        $img->save('uploads/workshops/'.$workshop->id.'.jpg');


        return redirect('admin/workshops');
    }

    public function editWorkshop($workshop_id){

        $workshop = Workshop::find($workshop_id);
        return view('admin.workshops.edit')->with('workshop',$workshop);
    }


    public function updateWorkshop(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'name_es' => 'required|max:255',
            'img_file' => 'mimes:jpg,jpeg,png',
        ]);

        $workshop = Workshop::find($request->input('workshop_id'));
        $workshop->name = $request->input('name');
        $workshop->name_es = $request->input('name_es');
        $workshop->description = $request->input('description');
        $workshop->description_es = $request->input('description_es');
        $workshop->save();

        $i = '';
        $i = $request->file('img_file');

        if($i != ''){
            $img = Image::make($request->file('img_file'));
            $img->fit(800,600);
            $img->save('uploads/workshops/'.$workshop->id.'.jpg');
        }




        return redirect('admin/workshops');

    }



    public function specialEvents(){

        return view('admin.special_events.list');

    }


    public function gallery(){

        $images = Galleryimage::orderBy('id','desc')->get();
        return view('admin.gallery.list')->with('images',$images);

    }

    public function galleryCreate(){

        return view('admin.gallery.create');

    }

    public function galleryConfirm(Request $request){

        $img_place = new Galleryimage();
        $img_place->name = $request->input('name');
        $img_place->save();

        $img = Image::make($request->file('img_file'));
        $img->fit(800,800);
        $img->save('uploads/gallery/'.$img_place->name.'_'.$img_place->id.'.jpg');

        return redirect('admin/gallery');
    }


    public function galleryDelete($id){
        Galleryimage::find($id)->delete();
        return redirect('admin/gallery');
    }


}
