<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    
    return $request->user();
});
// Auth::routes();
Route::get('subproperty','\App\Http\Controllers\AjaxController@index');
Route::get('overview/{id}','\App\Http\Controllers\AjaxController@overview_api');
Route::get('search','\App\Http\Controllers\AjaxController@search');
Route::get('collections','\App\Http\Controllers\AjaxController@propertyCollection');
Route::get('getAllSchedule/{id}','\App\Http\Controllers\AjaxController@getAllSchedule');
Route::post('createSchedule','\App\Http\Controllers\ScheduleController@store');
Route::get('getAllInquiry/{id}', [App\Http\Controllers\UserController::class, 'userInquired'])->name('Inquiry');
Route::delete('deleteSchedule/{id}','\App\Http\Controllers\ScheduleController@destroy');

// all landlord properties for screening controller
Route::get('getAllLandlordProperties/{id}','\App\Http\Controllers\ScreeningController@getAllLandlordProperties')->name('screening');