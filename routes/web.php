<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ToysController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return 'Hello, World';
//     return view('welcome');
});

Route::get('/test', function () {
    return 'This is a test route.';
});

// Route::get('/town', action : 'MyPlaceController@index');
Route::get('/town', [MyPlaceController::class, 'index']);

Route::get
('/posts', [PostController::class, 'index'])->name(name:'post.index');

Route::get
('/posts/create', [PostController::class, 'create'])->name(name:'post.create');

Route::post
('/posts', [PostController::class, 'store'])->name(name:'post.store');

Route::get
('/posts/{post}', [PostController::class, 'show'])->name(name:'post.show');

Route::get
('/posts/{post}/edit', [PostController::class, 'edit'])->name(name:'post.edit');

Route::patch
('/posts/{post}', [PostController::class, 'update'])->name(name:'post.update');

Route::delete
('/posts/{post}', [PostController::class, 'destroy'])->name(name:'post.delete');

// ---------------------------------------------------------------------

Route::get
('/posts/update', [PostController::class, 'update']);

Route::get
('/posts/delete', [PostController::class, 'delete']);

Route::get
('/posts/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get
('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get
('/toys', [ToysController::class, 'index']);

Route::get
('/main', [MainController::class, 'index'])->name(name:'main.index');;

Route::get
('/about', [AboutController::class, 'index'])->name(name:'about.index');;

Route::get
('/contacts', [ContactController::class, 'index'])->name(name:'contact.index');;




