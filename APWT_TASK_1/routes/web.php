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
Route::get('/service',[PagesController::class, 'service'])->name('service');
Route::get('/ourteam',[PagesController::class, 'ourteam'])->name('ourteam');
Route::get('/aboutus',[PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[PagesController::class, 'contactus'])->name('contactus');
//Student routes

Route::get('/studentEdit/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit',[StudentController::class, 'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}',[StudentController::class, 'studentDelete'])->name('studentDelete');
Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');


