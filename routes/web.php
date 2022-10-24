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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/drivers', \App\Http\Controllers\DriverController::class, ["names"=> 'driver']);
    Route::resource('/customers', \App\Http\Controllers\CustomerController::class, ["names"=> 'customer']);
    Route::resource('/managers', \App\Http\Controllers\ManagerController::class, ["names"=> 'manager']);
    
});
require __DIR__.'/auth.php';
