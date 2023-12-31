<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "name" => "Aisaka Taiga",
        "email" => "prod.home@gmail.com",
        "image" => "taig.jpg",
        "title" => "About"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post

Route::get('/posts/{post:slug}', [PostController::class, 'show']);


// Halaman Categories

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all() 
    ]);
});




// Halaman Single Post Category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->post,
        'category' => $category->name 
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'User Post',
        'posts' => $author->post,
    ]);
});