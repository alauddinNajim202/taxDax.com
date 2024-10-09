<?php

use App\Http\Controllers\Web\front_end\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/join-as-prepare', [HomeController::class, 'join_tax_prepare'])->name('home.prepare');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

