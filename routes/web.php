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

Route::get('/html-encoding', function () {
    return view('html-encoding', ['name' => '<strong>Yuta</strong>']);
});

Route::get('/disable', function () {
    return view('disable');
});

Route::get('/css-class', function () {
    return view('css-class', ['hobbies' => [
        [
            'name' => 'gym',
            'love' => true
        ],
        [
            'name' => 'swimming',
            'love' => false
        ],
        [
            'name' => 'coding',
            'love' => true
        ]
    ]]);
});

Route::get('/form', function () {
    return view('form', [
        'user' => [
            'name' => 'Yuta',
            'premium' => true,
            'admin' => true
        ]
    ]);
});

