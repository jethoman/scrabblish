<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/letters', 'ScabblishController@index');
Route::get('/letters/{letter?}','ScabblishController@show');
if(config('app.env')=='local'){
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');


Route::get('/', 'WelcomeController');
