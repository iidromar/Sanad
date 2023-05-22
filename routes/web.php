<?php

use App\Http\Controllers\scenario;
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

Route::get('/', [scenario::class, 'index'])->name('index');

Route::get('/scenario', [scenario::class, 'fetch_ai'])->name('scenario');
Route::get('/scenario_ai', [scenario::class, 'fetch_ai'])->name('scenario_ai');
Route::post('/search', [scenario::class, 'search'])->name('search');
Route::get('/roadmap', [scenario::class, 'roadmap'])->name('roadmap');
Route::get('/leaderboard', [scenario::class, 'leaderboard'])->name('leaderboard');

