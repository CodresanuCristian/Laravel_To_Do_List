<?php

use App\Http\Controllers\ToDoController;
use App\Models\todolist;
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
    return redirect('/70sAcid');
    // return view('index');
});

Route::post('/getdata', [ToDoController::class, 'GetData'])->name('add');
Route::get('/{theme}', [ToDoController::class, 'View']);
Route::post('/update/{id}', [ToDoController::class, 'Update'])->name('done');
Route::delete('/destroy/{id}', [ToDoController::class, 'Destroy'])->name('remove');