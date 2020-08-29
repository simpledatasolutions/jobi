<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::get('/subscribe/submit', 'SubscribeController@submit');

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/apply/submit', 'ApplicationController@submit');

Route::get('/about', function () {
    return view('about');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form/questions', 'FormController@getQuestions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/admin/users','Admin\UsersController',['except' => ['show','create','store']]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users','UsersController',['except' => ['show','create','store']]);


});



Route::get('api/validate', function () {
    return [1, 2, 3];
});