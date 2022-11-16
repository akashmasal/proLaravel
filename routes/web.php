<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',[StudentsController::class,'index']);
Route::post('/form',[StudentsController::class,'store']);
Route::get('/students',[StudentsController::class,'students']);
Route::get('/update/{id}',[StudentsController::class,'updateview']);
Route::post('/update/{id}',[StudentsController::class,'update']);
Route::get('/delete/{id}',[StudentsController::class,'deleteStudent']);
Route::get('/students',[StudentsController::class,'students']);
