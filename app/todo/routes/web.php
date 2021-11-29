<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

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


Route::view('/', 'todoapp');

Route::post('/datarecord',   [ToDoController::class, 'NewRecord']);
Route::get('/',              [ToDoController::class, 'View']);
Route::get('/update/{id}',   [ToDoController::class, 'Update'])->name('update');
Route::get('/destroy/{id}',  [ToDoController::class, 'Destroy'])->name('destroy');