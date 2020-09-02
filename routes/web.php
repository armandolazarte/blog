<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = App\Models\Post::query()->latest('published_at')->get();

    return view('welcome', compact('posts'));
});

Route::get('admin', function () {
    return view('admin.dashboard');
});

Auth::routes();
