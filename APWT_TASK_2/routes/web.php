<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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
Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/contactus',[PagesController::class, 'contactus'])->name('contactus');
Route::post('/contactus',[StudentController::class, 'contactusCreateSubmitted'])->name('contactus');

Route::get('/signup',[StudentController::class, 'signup'])->name('signup');
Route::post('/signup',[StudentController::class, 'signupCreateSubmitted'])->name('signup');


Route::get('/login',[StudentController::class, 'login'])->name('login');
Route::post('/login',[StudentController::class, 'loginCreateSubmitted'])->name('login');

