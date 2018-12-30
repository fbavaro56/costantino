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
Route::get('/workshops', 'WebController@showWorkshops');
Route::get('/workshops/{workshop_name}/courses/{from}/{to}', 'WebController@showCourses');

Route::get('/course/view/{course_id}/{date}', 'WebController@showCourse');

Route::post('/course/booking','WebController@bookingCourse');

Route::get('/contact', 'WebController@contact');
Route::get('/about', 'WebController@about');

/**
 * admin
 */
Route::auth();
Route::get('/admin', 'HomeController@index');
Route::get('/admin/workshops', 'HomeController@workshops');
Route::get('/admin/special-events', 'HomeController@specialEvents');