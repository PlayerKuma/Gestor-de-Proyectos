<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;

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


Route::resource('tasks', TaskController::class);
Route::resource('projects', ProjectController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/uHome', [App\Http\Controllers\uHomeController::class, 'index'])->name('uHome');
Route::get('/showTasks', [App\Http\Controllers\TaskController::class, 'uIndex'])->name('Tasks');
Route::get('/showProjects', [App\Http\Controllers\ProjectController::class, 'uIndex'])->name('Projects');
