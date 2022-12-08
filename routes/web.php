<?php

use App\Http\Controllers\{
    ProjectController,
    IterationController,
    TaskController,
    UserController,
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::permanentRedirect('/', '/projects');
    Route::resource('projects', ProjectController::class);
    Route::patch('/projects/{project}/users/attach', [ProjectController::class, 'attachUser'])->name('project.attach-user');

    Route::resource('projects.iterations', IterationController::class)->except(['index', 'show'])->shallow();
    Route::resource('iterations.tasks', TaskController::class)->except(['index', 'show'])->shallow();

    Route::resource('users', UserController::class)->except(['show']);
});
