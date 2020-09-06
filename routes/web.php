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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('students', 'StudentController')->except(['destroy']);
    Route::resource('plans', 'PlanController');
    Route::resource('registrations', 'RegistrationController');
    Route::resource('checkins', 'CheckinController');
    Route::resource('help_orders', 'HelpOrderController');
});
