<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/**
 * Website
 */
Route::get('/', 'WebController@index');
Route::get('home/{lang?}', 'WebController@index');

Route::get('/workshops/{lang?}', 'WebController@showWorkshops');
Route::get('/workshops/{workshop_name}/courses/{from}/{to}/{lang?}', 'WebController@showCourses');

Route::get('/course/view/{course_id}/{date}/{lang?}', 'WebController@showCourse');

Route::post('/course/booking','WebController@bookingCourse');

Route::get('/contact/{lang?}', 'WebController@contact');
Route::get('/about/{lang?}', 'WebController@about');
Route::get('/gallery/{lang?}', 'WebController@gallery');


/**
 * admin
 */
Route::auth();
Route::get('/admin', 'HomeController@index');
Route::get('/admin/workshops', 'HomeController@workshops');
Route::get('/admin/workshops/create', 'HomeController@createWorkshop');
Route::post('/admin/workshops/confirm', 'HomeController@confirmWorkshop');
Route::get('/admin/workshops/edit/{workshop_id}', 'HomeController@editWorkshop');
Route::post('/admin/workshops/update', 'HomeController@updateWorkshop');

Route::get('/admin/courses/{workshop_id}', 'CoursesController@listCourses');
Route::get('/admin/courses/create/{workshop_id}', 'CoursesController@create');
Route::post('/admin/courses/confirm', 'CoursesController@confirm');

Route::get('/admin/gallery', 'HomeController@gallery');
Route::get('/admin/gallery/create', 'HomeController@galleryCreate');
Route::post('/admin/gallery/confirm', 'HomeController@galleryConfirm');
Route::get('/admin/gallery/delete/{id}', 'HomeController@galleryDelete');

Route::get('/admin/special-events', 'HomeController@specialEvents');

