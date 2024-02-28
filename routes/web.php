<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','Dashboard\DashboardController@index')->name('DashboardMenu');

/**
 * Write down your Profile Routes here
 */
Route::get('/aboutMe','Profile\ProfileController@index')->name('aboutMe');


/**
 * Write down here the routes of Blog
 */
Route::get('/blog','Blog\BlogDashboardController@index')->name('blog');