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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/registerSAI','RegisterDataController@register')->name('studentRegister');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerstudent', 'RegisterStudentController@index')->name('registerStudent')->middleware('auth');;
