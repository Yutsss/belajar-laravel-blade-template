<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welocome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'Yuta']);
});

Route::get('/world', function () {
    return view('hello.world', ['name' => 'Yuta']);
});
