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
    Route::patch('/projects/{project}/users/detach', [ProjectController::class, 'detachUser'])->name('project.detach-user');

    Route::resource('projects.iterations', IterationController::class)->except(['index', 'show'])->shallow();
    Route::resource('iterations.tasks', TaskController::class)->except(['index', 'show'])->shallow();
    Route::patch('/tasks/{task}/set-user', [TaskController::class, 'setUser'])->name('tasks.set-user');

    Route::resource('users', UserController::class)->except(['show']);
});
