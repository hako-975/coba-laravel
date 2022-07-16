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


Route::get('/blog', function () {
	$blog_posts = [
		[
			'title' => 'first blog',
			'slug' => 'first-blog',
			'author' => 'Andri',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis rerum corrupti quod at doloremque est ullam animi fugit iusto aliquid itaque blanditiis exercitationem maxime cupiditate ipsum necessitatibus, quas corporis! Nisi illum, et eveniet sit dignissimos recusandae natus? Similique eaque debitis nobis iste? Inventore, a dolorum doloremque maiores ex molestiae ducimus aspernatur dolor asperiores autem, cum ullam adipisci soluta itaque rerum fuga unde totam. Distinctio odit numquam molestiae quod rem quas facilis blanditiis beatae mollitia consequuntur. Asperiores, ipsam. Asperiores, itaque molestiae ut ab in saepe cumque maxime porro error assumenda, provident suscipit velit libero dolor amet veritatis necessitatibus recusandae. Molestias, quae?'
		],
		[
			'title' => 'second blog',
			'slug' => 'second-blog',
			'author' => 'Andre',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eveniet unde nesciunt nam hic adipisci maiores possimus, in aperiam iure consequuntur nemo? Saepe voluptate at repudiandae odit alias pariatur voluptatum earum quia, autem quis repellat hic cupiditate delectus temporibus aspernatur exercitationem sint ex incidunt. Porro, quaerat odio distinctio dolorum nesciunt assumenda error nobis dolorem mollitia ea ipsam labore at accusantium, explicabo praesentium iusto similique dignissimos sint excepturi id repudiandae.'
		]
	];

    return view('posts', [
		'title' => 'Posts',
		'posts' => $blog_posts
	]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
	$blog_posts = [
		[
			'title' => 'first blog',
			'slug' => 'first-blog',
			'author' => 'Andri',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis rerum corrupti quod at doloremque est ullam animi fugit iusto aliquid itaque blanditiis exercitationem maxime cupiditate ipsum necessitatibus, quas corporis! Nisi illum, et eveniet sit dignissimos recusandae natus? Similique eaque debitis nobis iste? Inventore, a dolorum doloremque maiores ex molestiae ducimus aspernatur dolor asperiores autem, cum ullam adipisci soluta itaque rerum fuga unde totam. Distinctio odit numquam molestiae quod rem quas facilis blanditiis beatae mollitia consequuntur. Asperiores, ipsam. Asperiores, itaque molestiae ut ab in saepe cumque maxime porro error assumenda, provident suscipit velit libero dolor amet veritatis necessitatibus recusandae. Molestias, quae?'
		],
		[
			'title' => 'second blog',
			'slug' => 'second-blog',
			'author' => 'Andre',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eveniet unde nesciunt nam hic adipisci maiores possimus, in aperiam iure consequuntur nemo? Saepe voluptate at repudiandae odit alias pariatur voluptatum earum quia, autem quis repellat hic cupiditate delectus temporibus aspernatur exercitationem sint ex incidunt. Porro, quaerat odio distinctio dolorum nesciunt assumenda error nobis dolorem mollitia ea ipsam labore at accusantium, explicabo praesentium iusto similique dignissimos sint excepturi id repudiandae.'
		]
	];

	$new_post = [];
	foreach($blog_posts as $post)
	{
		if($post['slug'] === $slug)
		{
			$new_post = $post;
		}
	}

	return view('post', [
		'title' => $new_post['title'],
		'post' => $new_post
	]);
});