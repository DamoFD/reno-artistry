<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all posts
// show - Show single post
// create - Show form to create new post
// store - Store new post
// edit - Show form to edit post
// update - Update post
// destroy - Delete post


// All Posts
Route::get('/', [PostController::class, 'index']);

// Show Create Form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// Store Post Data
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update Post Data
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Delete Post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

// Single Post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
