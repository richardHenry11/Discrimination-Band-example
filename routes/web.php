<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegistController;
use App\Models\Event;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/update', [Controller::class, 'viewUpdate']);

Route::get('/about', [Controller::class, 'about']);

Route::get('/add', [Controller::class, 'add']);

Route::get('/signin', [loginController::class, 'index'])->middleware('guest');

Route::get('/regist', [RegistController::class, 'index']);

Route::post('/regist', [RegistController::class, 'store']);

Route::post('/signin', [loginController::class, 'authenticate']);

Route::post('/logout', [loginController::class, 'logout']);

Route::post('/update',[Controller::class, 'tambahEvent']);

Route::delete('/update/{id}', [Controller::class, 'delete'])->name('data.delete');

Route::get('/{personil:slug}', [Controller::class, 'show']);


