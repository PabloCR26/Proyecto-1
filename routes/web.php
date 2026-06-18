<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => 'José Pablo'
]);






Route::view('/contact', 'contact');
Route::view('/about', 'about');
