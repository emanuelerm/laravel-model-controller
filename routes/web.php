<?php

use App\Http\Controllers\Guest;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Guest::class, 'index'])->name('index');

Route::get('/movie/{id}', [Guest::class, 'show'])->name('show');
