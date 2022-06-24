<?php

use App\Http\Controllers\NotificationController;
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

Route::get('/example1', [NotificationController::class, 'example1']);
Route::get('/example2', [NotificationController::class, 'example2']);
Route::get('/example3', [NotificationController::class, 'example3']);
