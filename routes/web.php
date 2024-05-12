<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\EcoLambersController;

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

Route::get('/', [EcoLambersController::class, 'index'])->name('home');

Route::get('/about_us', [EcoLambersController::class, 'about_us'])->name('about_us');

Route::get('/contacts', [EcoLambersController::class, 'contacts'])->name('contacts');
