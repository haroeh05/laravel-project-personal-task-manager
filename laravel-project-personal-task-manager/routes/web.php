<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
});

// ADD TASK
Route::get('/addtask', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::post('/addtask', [TaskController::class, 'store'])
    ->name('tasks.store');

// VIEW TASKS
Route::get('/viewtask', [TaskController::class, 'index'])
    ->name('tasks.index');

// EDIT TASK
Route::get('/edittask/{task}', [TaskController::class, 'edit'])
    ->name('tasks.edit');

Route::put('/edittask/{task}', [TaskController::class, 'update'])
    ->name('tasks.update');

// DELETE TASK
Route::delete('/deletetask/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');

// UPDATE STATUS
Route::patch('/updatestatus/{task}', [TaskController::class, 'updateStatus'])
    ->name('tasks.updateStatus');