<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::permanentRedirect('/', '/projects');
    Route::resource('projects', ProjectController::class);
});
