<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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


Route::get('/login/sign', [App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle']);

Route::get('/login/google',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);

// Route::get('/dashboard', function () {
//     return view('layouts/property/index');
// });
Route::resource('property','\App\Http\Controllers\PropertyController');
// Route::resource('schedule','\App\Http\Controllers\ScheduleController');
Route::resource('inquiry','\App\Http\Controllers\InquiryController');
// Route::resource('screening','\App\Http\Controllers\ScreeningController');
Route::resource('maintenance','\App\Http\Controllers\MaintenanceController');
Route::get('/search', [App\Http\Controllers\AjaxController::class, 'subproperty']);

Route::match(['put','patch'],'/rented/{id}', [App\Http\Controllers\AjaxController::class, 'rentedUpdate']);
Route::get('/search', [App\Http\Controllers\PropertyController::class, 'search'])->name('search');
Route::get('/collections', [App\Http\Controllers\PropertyController::class, 'propertyCollection'])->name('Collection');

Auth::routes();
Route::match(['put','patch'],'/user', [App\Http\Controllers\UserController::class, 'updateUser']);
// Route::get('/inquiry', [App\Http\Controllers\UserController::class, 'userInquired'])->name('Inquiry');
Route::match(['put','patch'],'/landlord/inquiry/{id}', [App\Http\Controllers\UserController::class, 'landlordInquiry'])->name('Landlord Inquiry');
Route::match(['put','patch'],'/inquiry/accepted/{id}', [App\Http\Controllers\UserController::class, 'is_Accepted']);
// Route::match(['put','patch'],'/landlord/inquiry/', [App\Http\Controllers\UserController::class, 'inquiry_rejected'])->name('Landlord Inquiry');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::match(['put','patch'],'/inquiry', [App\Http\Controllers\UserController::class, 'inquireProperty'])->name('Inquiry');
Route::resource('profile','\App\Http\Controllers\UserController');



// route for calendar
// Route::match(['put','patch'],'/inquiry/calendar/{id}', [App\Http\Controllers\InquiryController::class, 'rentedUpdate']);


Route::get('/calendar', [App\Http\Controllers\ScheduleController::class, 'getCalendarPerInquiry'])->name('Calendar'); 
Route::get('/screening','\App\Http\Controllers\ScreeningController@index')->name('screening');