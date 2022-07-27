<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// 1 post ditulis berapa namatabel
    use HasFactory;

	// protected $fillable = [
	// 	'title',
	// 	'excerpt',
	// 	'body'
	// ];

	protected $guarded = ['id'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
