<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/payments', function () {
    return view('payment');
})->name('payments');

Route::get('/employees', function () {
    return view('employee');
})->name('employees');

Route::get('/vehicles', function () {
    return view('vehicle');
})->name('vehicles');

Route::get('/profile-setting', function () {
    return view('profile-setting');
})->name('profile-setting');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/vehicles', [VehicleController::class, 'vehicle'])->name('vehicles');
    

});

require __DIR__.'/auth.php';
