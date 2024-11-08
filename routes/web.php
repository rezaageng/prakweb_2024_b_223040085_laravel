<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',  ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'rezaa', 'title' => 'About page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog page', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single post', 'post' => $post]);
});
