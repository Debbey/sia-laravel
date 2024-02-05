<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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
//     return view('welcome');
// });

Route::get('/', [HomepageController::class,'home']);

Route::get('homepage', [HomepageController::class,'home'])->name('homepage');

Route::get('contact', [HomepageController::class,'contact'])->name('contact');

Route::get('about', [HomepageController::class,'about'])->name('about');