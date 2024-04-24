<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect('/categories');
    // return view('welcome');
});
