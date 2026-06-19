<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = Idea::where('status', 'pending')->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'status' => 'pending',
    ]);

    return redirect('/');
});
// Temporary
Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});
