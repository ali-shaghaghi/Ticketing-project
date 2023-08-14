<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminTicketsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware' => 'auth'], function () {
    Route::get('/',  [TicketController::class, 'index'])->name('tickets.index');
    Route::resource('/tickets', TicketController::class);
    Route::post('/tickets/{ticket}/reply', [TicketController::class, 'reply'])->name('tickets.reply');


});



Route::group(['prefix' => 'administrator'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');


    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/',  [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/tickets',  [AdminTicketsController::class, 'index'])->name('admin.tickets.index');
        Route::get('/tickets/{ticket}',  [AdminTicketsController::class, 'show'])->name('admin.tickets.show');
        Route::post('/tickets/{ticket}/reply', [AdminTicketsController::class, 'reply'])->name('admin.tickets.reply');





    });
});


