<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/roles',[RoleController::class,"index"])->name("roles-index");
    Route::get('/roles-create',[RoleController::class,"create"])->name("roles-create");
    Route::post('/roles-store',[RoleController::class,"store"])->name("store");
    Route::get('/user-index',[UserController::class,"index"])->name("user-index");
    Route::get('/user-create',[UserController::class,"create"])->name("user-create");
    Route::post('/user-store',[UserController::class,"store"])->name("user-store");
});