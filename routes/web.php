<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PraticalWorkController;


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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// les routes  de l'utilisateur
Route::post('authenticate',[UserController::class,'authenticate'])->name('authenticate');
Route::get('login',[UserController::class,'login'])->name('login');

// les controlleurs de la sesssion

Route::get('session',[SessionController::class,'session'])->name('session');
Route::post('session',[SessionController::class,'createSession'])->name('CreateSession');
Route::get('listesession',[SessionController::class,'GetAllSession'])->name('listesession');
Route::get('update',[SessionController::class,'show'])->name('show');
Route::post('update/{id}',[SessionController::class,'UpdateSession'])->name('UpdateSession');

// les controlleurs des travaux pratiques

Route::get('create',[PraticalWorkController::class,'indexx'])->name('indexx');
Route::post('create/{id}',[PraticalWorkController::class,'CreatePraticalWork'])->name('CreatePraticalWork');




Route::get('dashboard',DashboardController::class)->name('dashboard');

