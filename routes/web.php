<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);

Route::get('/hello', function(){
    return 'Hello, Laravel';
});

Route::get('/greet', [GreetController::class, 'show']);