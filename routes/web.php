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

Route::get('/dashboard', function () {
    return view('layouts/dashboard/app');
});
Route::resource('property','\App\Http\Controllers\PropertyController');
Route::get('/search', [App\Http\Controllers\AjaxController::class, 'subproperty']);
Route::resource('inquiry','\App\Http\Controllers\InquiryController');
// Route::get('/rented/{id}/', [App\Http\Controllers\AjaxController::class, 'rentedUpdate']);
Route::match(['put','patch'],'/rented/{id}', [App\Http\Controllers\AjaxController::class, 'rentedUpdate']);
Route::get('/search', [App\Http\Controllers\PropertyController::class, 'search'])->name('search');
Route::get('/collections', [App\Http\Controllers\PropertyController::class, 'propertyCollection'])->name('Collection');