<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tasks\TaskStoreController;
use App\Http\Controllers\Tasks\TaskUpdateController;
use App\Http\Controllers\Tasks\TaskDeleteController;
use App\Enums\TasksStatusEnum;
use App\Models\Tasks;
use Illuminate\Support\Facades\Redirect;

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
    // Redirect to tasks list page.
   return Redirect::to('/tasks');
});

/**
 * Group the admin task list and actions
 * 
 */
Route::group(['prefix' => 'tasks'], function () {

    // Load the default list page
    Route::get('/', function () {
    	return view('tasks.list', ['tasks' => Tasks::all()]);
    })->name('tasks.list');
    
    // Load the task create page.
    Route::get('create', function () {
        return view('tasks.create');
    })->name('tasks.create');

    // Save the task.
    Route::post('store', TaskStoreController::class)->name('tasks.store');

    // Load the task edit page
    Route::any('edit/{id}', function($id){        
        return view('tasks.edit', ['task' => Tasks::find($id)->toArray()]);
    })->name('tasks.edit');

    // Update the task.
    Route::post('update', TaskUpdateController::class)->name('tasks.update');

    // Delete the task
    Route::any('destroy/{id}', TaskDeleteController::class)->name('tasks.delete');

    // Update task status to "completed"
    Route::any('completed/{id}',function($id) {

        Tasks::find($id)->update(['status' => TasksStatusEnum::COMPLETED->value]);
        // Redirect to tasks list page.
        return Redirect::to('/tasks');
    })->name('tasks.done');
    
});
