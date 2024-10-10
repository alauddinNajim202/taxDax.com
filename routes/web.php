<?php

use App\Http\Controllers\Web\front_end\ClientController;
use App\Http\Controllers\Web\front_end\HomeController;
use App\Http\Controllers\Web\front_end\TaxPrepareController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('front_end.layouts.home');
//     // return view('welcome');
// });


// front end landing page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/join', [HomeController::class, 'join'])->name('home.join');
Route::get('/join-as-prepare', [HomeController::class, 'join_tax_prepare'])->name('home.prepare');



// client dashboard routes
Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/bookmarks', [ClientController::class, 'bookmark'])->name('client.bookmarks');
Route::get('/client/bookings', [ClientController::class, 'booking'])->name('client.booking');
Route::get('/client/profile-bookings', [ClientController::class, 'profile_booking'])->name('client.profile_booking');



// tax prepare dashboard routes
Route::get('/tax-prepare/dashboard', [TaxPrepareController::class, 'index'])->name('tax_prepare.index');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

