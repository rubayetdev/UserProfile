<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/insert',[UserController::class,'store'])->name('insert');

Route::post('/login',[UserController::class,'login'])->name('login');

Route::get('/user/{id}',[UserController::class,'userpage'])->name('user');

Route::post('/insert',[UserController::class,'insertTask'])->name('insert');
