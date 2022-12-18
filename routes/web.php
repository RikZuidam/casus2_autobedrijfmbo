<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Customer;

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

Route::get('/', function() {
    return view('home')->with([
        'car' => Car::get(),
        'customer' => Customer::get()
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('user.login');
    // return view('user.login')->with([
    //     'car' => Car::get(),

    // ]);
})->name('login');

Route::post('/loginSubmit', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');