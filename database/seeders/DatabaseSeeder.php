<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Edi Lesdianto',
            'username' => 'edilesdianto',
            'email' => 'edilesdianto@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        // User::create([
        //     'name' => 'Resky',
        //     'email' => 'resky@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia facilis dolores et dolore ratione id voluptate accusamus, aliquid obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quisquam quam consectetur, adipisci animi, praesentium voluptatum sapiente ullam repellendus quod fugit amet. Iusto culpa dolore delectus beatae totam magnam eos ipsa repellendus facilis ducimus maxime excepturi nobis laudantium nesciunt quaerat vero voluptatum, alias accusamus voluptates blanditiis! Veniam non voluptatem eveniet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia facilis dolores et dolore ratione id voluptate accusamus, aliquid obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quisquam quam consectetur, adipisci animi, praesentium voluptatum sapiente ullam repellendus quod fugit amet. Iusto culpa dolore delectus beatae totam magnam eos ipsa repellendus facilis ducimus maxime excepturi nobis laudantium nesciunt quaerat vero voluptatum, alias accusamus voluptates blanditiis! Veniam non voluptatem eveniet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia facilis dolores et dolore ratione id voluptate accusamus, aliquid obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quisquam quam consectetur, adipisci animi, praesentium voluptatum sapiente ullam repellendus quod fugit amet. Iusto culpa dolore delectus beatae totam magnam eos ipsa repellendus facilis ducimus maxime excepturi nobis laudantium nesciunt quaerat vero voluptatum, alias accusamus voluptates blanditiis! Veniam non voluptatem eveniet.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia facilis dolores et dolore ratione id voluptate accusamus, aliquid obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quisquam quam consectetur, adipisci animi, praesentium voluptatum sapiente ullam repellendus quod fugit amet. Iusto culpa dolore delectus beatae totam magnam eos ipsa repellendus facilis ducimus maxime excepturi nobis laudantium nesciunt quaerat vero voluptatum, alias accusamus voluptates blanditiis! Veniam non voluptatem eveniet.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
