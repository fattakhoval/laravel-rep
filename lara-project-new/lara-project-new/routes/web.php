<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [AuthController::class, 'show_signup'])->name('show_signup');
Route::post('/signup' , [AuthController::class, 'signup'])->name('signup');

Route::get('/signin' , [AuthController::class, 'show_signin'])->name('show_signin');
Route::post('/signin' , [AuthController::class, 'signin'])->name('signin');

Route::get('/logout' , [AuthController::class, 'logout'])->name('logout');


Route::get('/admin' , [AuthController::class, 'admin'])->name('admin');
Route::get('/user' , [AuthController::class, 'user'])->name('user');

Route::get('/admin' , [ApplicationController::class, 'appl_all'])->name('appl_all');
Route::get('/user' , [ApplicationController::class, 'appl'])->name('appl');

Route::post('/user/create' , [ApplicationController::class, 'create'])->name('create');


Route::get('/{id}/accept' , [ApplicationController::class, 'accept'])->name('accept');
Route::get('/{id}/reject' , [ApplicationController::class, 'reject'])->name('reject');
