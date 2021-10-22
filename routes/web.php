<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('add', function () {
    return view('add');
});
Route::post('add',[UserController::class,'add']);
Route::get('/',[UserController::class,'read']);

Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('update/{id}',[UserController::class,'update']);
Route::post('update',[UserController::class,'updated']);

