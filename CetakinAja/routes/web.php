<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CourierController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[TasksController::class, 'index'])->name('dashboard');

    Route::get('/task',[TasksController::class, 'add']);
    Route::post('/task',[TasksController::class, 'create']);
   
    Route::get('/order',[OrderController::class, 'add']);
    Route::post('/order',[OrderController::class, 'create']);

    Route::get('/courier',[CourierController::class, 'add']);
    Route::post('/courier',[CourierController::class, 'create']);
    
    Route::get('/task/{task}', [TasksController::class, 'edit']);
    Route::post('/task/{task}', [TasksController::class, 'update']);
    
    Route::get('/list',[UserController::class,'show']);
    Route::get('/listorder',[OrderController::class,'show']);
    Route::get('/listcourier',[CourierController::class,'show']);
});