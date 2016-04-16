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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/addtour',function(){
    return view('admin.addTour');
});

Route::get('admin/addnews',function(){
    return view('admin.addNews');
});



Route::get('admin/addagency',function(){
    return view('admin.addAgency');
});


Route::get('admin/tours',function(){
    return view('admin.tours');
});

Route::get('admin/agencies','AgencyController@showAgencies');
Route::post('admin/agencies','AgencyController@store');



Route::get('admin/news',function(){
    return view('admin.news');
});
