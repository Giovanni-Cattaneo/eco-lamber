<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\EcoLambersController;
use App\Models\events;

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

route::get('single/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(events::get()), 404);

    $events = events::get()[$id];

    // dd($product);

    return view('guest.single', compact('events'));
})->name('single');
