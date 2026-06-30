<?php


declare(strict_types=1);
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;

// Route::get('/', fn () => view('welcome'));
Route::redirect('/', '/ideas');
Route::get('/ideas',[IdeaController::class, 'index'])->middleware('auth')->name('ideas');
Route::get('/ideas/{id}',[IdeaController::class, 'show'])->middleware('auth')->name('ideas.show');

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
