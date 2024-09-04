<?php

use App\Http\Controllers\JsonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
