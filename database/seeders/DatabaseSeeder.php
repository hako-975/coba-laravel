<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

		User::create([
			'name' => 'Andri Firman Saputra',
			'email' => 'andrifirmansaputra1@gmail.com',
			'password' => bcrypt('12345')
		]);
		
		User::create([
			'name' => 'Andre Farhan Saputra',
			'email' => 'andrefarhansaputra@gmail.com',
			'password' => bcrypt('12345')
		]);

		Category::create([
			'name' => 'Web Programming',
			'slug' => 'web-programming'
		]);
		
		Category::create([
			'name' => 'Personal',
			'slug' => 'personal'
		]);

		Post::create([
			'title' => 'Judul Pertama',
			'slug' => 'judul-pertama',
			'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.',
			'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.</p> <p>Dicta atque consequatur repellendus vel eaque, minus laborum necessitatibus non error quas ipsa temporibus autem excepturi voluptate porro, explicabo aliquid nulla fugit dolor est repudiandae id cupiditate culpa! Voluptatibus libero tempora iusto molestias aspernatur perferendis sed dolore repudiandae beatae illum?</p> <p>Dolor quidem tenetur officia suscipit, dignissimos cum soluta facere et animi voluptatibus atque porro, nemo aut quod tempora. Consequuntur unde voluptas fugiat tenetur harum provident deserunt quam, odit dignissimos magnam?</p>',
			'category_id' => 1,
			'user_id' => 1
		]);

		Post::create([
			'title' => 'Judul Kedua',
			'slug' => 'judul-kedua',
			'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.',
			'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.</p> <p>Dicta atque consequatur repellendus vel eaque, minus laborum necessitatibus non error quas ipsa temporibus autem excepturi voluptate porro, explicabo aliquid nulla fugit dolor est repudiandae id cupiditate culpa! Voluptatibus libero tempora iusto molestias aspernatur perferendis sed dolore repudiandae beatae illum?</p> <p>Dolor quidem tenetur officia suscipit, dignissimos cum soluta facere et animi voluptatibus atque porro, nemo aut quod tempora. Consequuntur unde voluptas fugiat tenetur harum provident deserunt quam, odit dignissimos magnam?</p>',
			'category_id' => 1,
			'user_id' => 1
		]);

		Post::create([
			'title' => 'Judul Ketiga',
			'slug' => 'judul-ketiga',
			'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.',
			'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.</p> <p>Dicta atque consequatur repellendus vel eaque, minus laborum necessitatibus non error quas ipsa temporibus autem excepturi voluptate porro, explicabo aliquid nulla fugit dolor est repudiandae id cupiditate culpa! Voluptatibus libero tempora iusto molestias aspernatur perferendis sed dolore repudiandae beatae illum?</p> <p>Dolor quidem tenetur officia suscipit, dignissimos cum soluta facere et animi voluptatibus atque porro, nemo aut quod tempora. Consequuntur unde voluptas fugiat tenetur harum provident deserunt quam, odit dignissimos magnam?</p>',
			'category_id' => 2,
			'user_id' => 1
		]);

		Post::create([
			'title' => 'Judul Keempat',
			'slug' => 'judul-keempat',
			'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.',
			'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam eligendi, fugit, cupiditate deleniti iste maxime dolorum quibusdam doloremque magnam excepturi fugiat error corporis soluta aliquam at unde repudiandae odio quod.</p> <p>Dicta atque consequatur repellendus vel eaque, minus laborum necessitatibus non error quas ipsa temporibus autem excepturi voluptate porro, explicabo aliquid nulla fugit dolor est repudiandae id cupiditate culpa! Voluptatibus libero tempora iusto molestias aspernatur perferendis sed dolore repudiandae beatae illum?</p> <p>Dolor quidem tenetur officia suscipit, dignissimos cum soluta facere et animi voluptatibus atque porro, nemo aut quod tempora. Consequuntur unde voluptas fugiat tenetur harum provident deserunt quam, odit dignissimos magnam?</p>',
			'category_id' => 2,
			'user_id' => 2
		]);
    }
}
