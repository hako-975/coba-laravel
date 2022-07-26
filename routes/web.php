<?php

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostController;
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
		'title' => 'Home'
	]);
});

Route::get('/about', function () {
    return view('about', [
		'title' => 'About',
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
		'categories' => Category::all()
	]);
});

Route::get('categories/{category:slug}', function (Category $category) {
	Return view('category', [
		'title' => $category->name,
		'posts' => $category->posts,
		'category' => $category->name
	]);
});