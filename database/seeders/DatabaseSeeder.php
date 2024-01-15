<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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


        user::create([
            'name' => 'Ega Destaviano',
            'email' => 'egafv@gmail.com',
            'password' => bcrypt('1234')
        ]);

        user::create([
            'name' => 'Asep Bagio',
            'email' => 'Aspwd@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web vinxx',
            'slug' => 'web-vinxx'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        


        post::create([
            'title' =>  'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sunt?',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit, amet consectetur adipisicing elit. A hic perspiciatis qui unde quia eum optio dolorem quis! Nisi, animi?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        post::create([
            'title' =>  'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sunt?',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit, amet consectetur adipisicing elit. A hic perspiciatis qui unde quia eum optio dolorem quis! Nisi, animi?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        post::create([
            'title' =>  'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sunt?',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit, amet consectetur adipisicing elit. A hic perspiciatis qui unde quia eum optio dolorem quis! Nisi, animi?',
            'category_id' => 2,
            'user_id' => 1
        ]);
        post::create([
            'title' =>  'Judul Keempat',
            'slug' => 'judul-kempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sunt?',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit, amet consectetur adipisicing elit. A hic perspiciatis qui unde quia eum optio dolorem quis! Nisi, animi?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}

