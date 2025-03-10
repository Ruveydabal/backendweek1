<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', [PingController::class, 'ping']);
Route::get('/books', function(){
    return 'Hello World';
});

