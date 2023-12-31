<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aankoop', [\App\Http\Controllers\AankoopController::class, 'index'])->name('aankoop.index');
Route::get('/aanbod', [\App\Http\Controllers\AanbodController::class, 'index'])->name('aanbod.index');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/wagens/{slug}', [\App\Http\Controllers\CarsDetailsController::class, 'index'])->name('details.index');
