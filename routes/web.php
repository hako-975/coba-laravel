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
		'title' => 'Home',
		'active' => 'home'
	]);
});

Route::get('/about', function () {
    return view('about', [
		'title' => 'About',
		'active' => 'about',
        'name' => 'Andri Firman Saputra',
        'email' => 'andrifirmansaputra1@gmail.com',
        'image' => 'andri.png' 
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()
{
	return view('categories', [
		'title' => 'Post Categories',
		'active' => 'categories',
		'categories' => Category::all()
	]);
});

Route::get('categories/{category:slug}', function (Category $category) {
	Return view('posts', [
		'title' => "Post By Category: $category->name",
		'active' => 'categories',
		'posts' => $category->posts->load('category', 'author')
	]);
});

Route::get('/authors/{author:username}', function (User $author) {
	return view('posts', [
		'title' => "Post By Author: $author->name",
		'posts' => $author->posts->load('category', 'author')
	]);
});