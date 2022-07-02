<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;


Route::get('/',[PagesController::class, 'index'])->name('home');

Route::get('/signup',[StudentController::class, 'signup'])->name('signup');
Route::post('/signup',[StudentController::class, 'signupCreateSubmitted'])->name('signup');



Route::get('/login',[StudentController::class, 'login'])->name('login');
Route::post('/login',[StudentController::class, 'loginCreateSubmitted'])->name('login');

Route::get('/user/dash',[StudentController::class, 'dashboard'])->name('dashboard')->middleware('ValidStudent');

Route::get('/user/edit',[StudentController::class, 'studentEdit'])->name('profile');
Route::post('/user/edit',[StudentController::class, 'studentEditSubmitted'])->name('profile');

Route::get('/logout',[StudentController::class,'logout'])->name('logout'); 