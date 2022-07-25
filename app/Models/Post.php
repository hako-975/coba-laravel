<?php

namespace App\Models;

class Post
{
	private static $blog_posts = [
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

	public static function all()
	{
		return collect(self::$blog_posts);
	}

	public static function find($slug)
	{
		$posts = static::all();
		return $posts->firstWhere('slug', $slug);
	}
}
