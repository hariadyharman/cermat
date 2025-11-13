<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/utama', function () {
    return view('utama',["title"=>"Utama"]);

});


Route::get('/home', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
"title"=>"Biodata",
"name"=>"Azwa Nisyiatul Rizky",
"email"=> "azwa_nisya@gmail.com",
"image"=>"azwa.jpg"

    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories/{category:slug}',  function (Category $category) {
        return view('posts',[
            'title'=> "Post by Category : $category->name",
            'posts'=> $category->posts->load('category','author')
            
        ] );
        
        });

        Route::get('/authors/{author:username}',  function (User $author) {
        return view('posts',[
            'title'=> 'User posts',
            'posts'=> $author->post->load('category', 'author'),
          
        ] );
        
    });


