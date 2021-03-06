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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userlogout'])->name('user.logout');
Route::post('enquriy', [App\Http\Controllers\ProductController::class, 'enquriy'])->name('enquriy');
Route::get('/fruits-vegetables', [App\Http\Controllers\HomeController::class, 'fruitsvegetables'])->name('fruits-vegetables');


Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
        Route::get('productshow', [App\Http\Controllers\Admin\AllController::class, 'fruit'])->name('productshow');
        Route::get('productcreate', [App\Http\Controllers\Admin\AllController::class, 'fruitcreate'])->name('productcreate');
        Route::post('productstore', [App\Http\Controllers\Admin\AllController::class, 'fruitstore'])->name('productstore');
        Route::get('productedit/{id}', [App\Http\Controllers\Admin\AllController::class, 'fruitedit'])->name('productedit');



    });
});
