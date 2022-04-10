<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\admin\CompaniesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\admin\Website_usersController;
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

Route::get('/job_details', function () {
    return view('job_details');
});
Route::get('/job_offers', function () {
    return view('job_offers');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/partners', function () {
    return view('partners');
});
Route::get('/services', function () {
    return view('services');
});




Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');

Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

Route::get('/home',[DashboardController::class,'dashboard'])->name('home');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");

Route::get('/new_category',[CategoriesController::class,'create'])->name('new_category');

Route::get('/login',[AuthController::class,'showLogin'])->name('login');


Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'role:admin|super_admin'],function(){

        Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');

    });

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});


Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');


//
Route::view('addCompany','admin.companies');
Route::post('addCompany',[CompaniesController::class,'addCompany']);

Route::get('/profile', function () {
    return view('profile.profileSettings');
});
Route::get('show',[Website_usersController::class,'show'])->name('showProfile');
Route::post('editProfile',[Website_usersController::class,'editProfile']);
