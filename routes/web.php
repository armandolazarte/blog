<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = App\Models\Post::query()->latest('published_at')->get();

    return view('welcome', compact('posts'));
});

Route::get('/posts', function () {
    return App\Models\Post::all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
