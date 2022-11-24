<?php

use App\Http\Controllers\{
    ProjectController,
    IterationController,
    TaskController,
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::permanentRedirect('/', '/projects');
    Route::resource('projects', ProjectController::class);

    Route::resource('projects.iterations', IterationController::class)->except(['index'])->shallow();
    Route::resource('iterations.tasks', TaskController::class)->except(['index'])->shallow();
});
