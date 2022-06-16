<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [MainController::class, 'home' ])->name('home');
Route::get('/katalog', [MainController::class, 'katalog' ])->name('katalog');
Route::get('/kontact', [MainController::class, 'kontact' ])->name('kontact');
Route::get('/info', [MainController::class, 'info' ])->name('info');
Route::get('/profile', [MainController::class, 'profile' ])->name('profile');
Route::get('/sign_in', [MainController::class, 'sign_in' ])->name('sign_in');


Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/test', [RegisterController::class, 'register'])->name('test');
//Route::post('/logout', [RegisterController::class, 'logout' ])->name('logout');
