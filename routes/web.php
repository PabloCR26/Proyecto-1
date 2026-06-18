<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'tasks' => [
            'Go to the store',
            'Go to the bank',
            'Go to the post office'
        ]

    ]);
});
