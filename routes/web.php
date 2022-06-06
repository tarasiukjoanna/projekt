<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationFormController;


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

Route::get('/', [WelcomeController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function() {
        Route::resource('notificationForm', NotificationFormController::class);
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloControler::class, 'show']);
Route::get('/notificationForm', [\App\Http\Controllers\NotificationFormController::class, 'index'])->name('notificationForm.index')->middleware('auth');
Route::get('/notificationForm/create', [\App\Http\Controllers\NotificationFormController::class, 'create'])->name('notificationForm.create')->middleware('auth');
Route::get('/notificationForm/{notification}', [\App\Http\Controllers\NotificationFormController::class, 'show'])->name('notificationForm.show')->middleware('auth');

Route::post('/notificationForm', [\App\Http\Controllers\NotificationFormController::class, 'store'])->name('notificationForm.store')->middleware('auth');

Route::get('/users/reports', [\App\Http\Controllers\UserController::class, 'index'])->middleware('can:isAdmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
