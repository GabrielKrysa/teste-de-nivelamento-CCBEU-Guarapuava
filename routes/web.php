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
//---------------------------------return view routes------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', function () {
    return view('Auth\login');
});

Route::get('/basictwo', 'BasicTwoController@index')->name('basictwo');

Route::get('/highinterone', 'HighInterOneController@index')->name('highinterone');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/registerstudent', 'RegisterStudentController@index')->name('registerStudent')->middleware('auth');

Route::get('/recomendations', 'RecomendationController@index')->name('recomendations')->middleware('auth');

Route::get('/registeredstudents', 'ManipulationStudentController@index')->name('registeredstudents')->middleware('auth');

Route::get('/tests', 'TestsController@index')->name('testIndex')->middleware('auth');

Route::post('/acessallowed', 'TestsController@enter')->name('acesstest')->middleware('auth');
//-----------------------------------action routes----------------------------------

Route::post('/studentregister', 'RegisterDataController@register')->name('studentRegister');

Route::post('/bacistwoverification','BasicTwoController@getResults')->name('bacistwoverification');

Route::post('/highinteroneverification', 'HighInterOneController@getResults')->name('highinteroneverification');

Auth::routes();
