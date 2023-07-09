<?php

use App\Http\Livewire\{
    ShowTasks,
    CreateTask,
    ShowStatistics
};
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

Auth::routes();

Route::get('/', ShowStatistics::class)->name('show-statistics');
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', ShowTasks::class)->name('show-tasks');
    Route::get('/create', CreateTask::class)->name('create-task');
});