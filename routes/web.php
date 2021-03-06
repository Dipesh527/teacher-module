<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherControler;
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
    return view('home');
});
Route::get('/index','App\Http\Controllers\TeacherControler@index')->name('index');
Route::get('/create','App\Http\Controllers\TeacherControler@create')->name('create');
Route::post('/store','App\Http\Controllers\TeacherControler@store')->name('store');
