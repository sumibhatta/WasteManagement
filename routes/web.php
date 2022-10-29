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


// Unsure Where I will use this----------------------------------------------------------------------------------
Route::middleware(['auth'])->group(function(){

    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
    Route::resource('/drivers', \App\Http\Controllers\User\DriverController::class, ["names"=> 'driver']);
    Route::resource('/customers', \App\Http\Controllers\User\CustomerController::class, ["names"=> 'customer']);    
});
require __DIR__.'/auth.php';


// Route::get('admin/home', function () {
//     return view('admin.home');
// })->middleware(['auth:admin', 'verified'])->name('admin.home');

// It's all about admin ----------------------------------------------------------------------------------

Route::middleware(['auth:admin'])->group(function(){

    Route::get('admin/home', [App\Http\Controllers\Admins\HomeController::class, 'index'])->name('admin.home');
    Route::resource('admin/drivers', \App\Http\Controllers\Admins\DriverController::class, ["names"=> 'admin.driver']);
    Route::resource('admin/customers', \App\Http\Controllers\Admins\CustomerController::class, ["names"=> 'admin.customer']);
    Route::resource('admin/salary', \App\Http\Controllers\Admins\SalaryController::class, ["names"=> 'admin.salary']);
    Route::resource('admin/payment', \App\Http\Controllers\Admins\PaymentController::class, ["names"=> 'admin.payment']);
    
});

require __DIR__.'/adminauth.php';


Route::get('driver/home', function () {
    return view('driver.home');
})->middleware(['auth:driverlogin', 'verified'])->name('driverlogin.home');

require __DIR__.'/driverauth.php';