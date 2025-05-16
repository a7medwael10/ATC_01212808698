<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontEnd\EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::post('/events/{event}/book', [EventController::class, 'book'])->name('events.book');
    Route::get('/congratulations', fn() => view('frontend.congratulations'))->name('congratulations');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'admin'], function (){
    Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin']], function (){
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::resource('admins', AdminController::class);
        Route::resource('events', AdminEventController::class);
        Route::get('/users', [UsersController::class, 'index']);
        route::resource('bookings', BookingController::class)->only(['index', 'show']);
    });

});
