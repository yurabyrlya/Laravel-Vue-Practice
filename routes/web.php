<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TasksController;
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

/**
 *  Tasks Routs
 */
Route::get('/', [TasksController::class, 'index'])->name('tasks');
Route::get('/tasksJson', [TasksController::class, 'showJson'])->name('tasksJson');
Route::get('/tasks/{task}', [TasksController::class , 'show']);
Route::get('/tasks/completed/{task}', [TasksController::class , 'complete']);

Route::get('/chart', function (){
    return view('tasks.chart');
});


