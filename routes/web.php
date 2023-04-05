<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Ndie Muhammad",
        "emial" => "ndie.muhammad@gmail.com",
        "img"   => "img.jpeg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
    
            "title"     => "Judul Pertama",
            "author"    => "Ndie Muhammad",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad in nostrum modi totam numquam dolor consectetur aliquid amet asperiores optio qui omnis vitae, distinctio deleniti non fugiat voluptate est? Ipsum!"
        ],[
            "title"     => "Judul Kedua",
            "author"    => "Ndie Muhammad",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad in nostrum modi totam numquam dolor consectetur aliquid amet asperiores optio qui omnis vitae, distinctio deleniti non fugiat voluptate est? Ipsum!"
        ]
    ];
    
    return view('posts', 
    [
        "title"     => "Blog",
        "posts"     => $blog_posts
    ]);
});
