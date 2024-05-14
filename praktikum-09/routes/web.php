<?php

namespace app\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[Admincontroller::class,'index']);