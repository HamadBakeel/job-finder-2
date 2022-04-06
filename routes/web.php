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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/profile', function () {
    return view('profileSettings');
});
Route::get('/job_details', function () {
    return view('job_details');
});
Route::get('/job_offers', function () {
    return view('job_offers');
});
Route::get('/login_register', function () {
    return view('login_register');
});
Route::get('/partners', function () {
    return view('partners');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/dash', function () {
    return view('admin.dashboard');
});
