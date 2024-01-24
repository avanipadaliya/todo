<?php

use App\Http\Controllers\addTaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addtask',function(){
    return view('addtask');    
})->middleware(['auth','verified'])->name('addtask');

Route::post('addtask',[TaskController::class,'store']);
Route::GET('mytasks',[TaskController::class,'show'])->name('mytasks');
Route::GET('task/{id}',[TaskController::class,'destroy']);
Route::GET('task/{id}/edit',[TaskController::class,'edit']);
Route::post('task/{id}/edit',[TaskController::class,'update']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
