<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::post('/contact-us', [PageController::class, 'sendContactEmail']);
