<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Mochamad Rifki',
        //     'email' => 'rifkibussines@yahoo.com',
        //     'password' => bcrypt('kepolu')
        // ]);

        // User::create([
        //     'name' => 'Dadan Endut',
        //     'email' => 'dadanasu94@gmail.com',
        //     'password' => bcrypt('kepolu')
        // ]);

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

        Post::factory(50)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam minima eligendi, repellat dolore est voluptatibus veniam eos iure numquam ea culpa sint atque doloribus accusamus suscipit amet quos expedita. Eveniet magni commodi officia ullam itaque provident eligendi modi vero, fugiat debitis dicta blanditiis, delectus pariatur. Laudantium consequatur, explicabo nulla itaque ipsam tempore architecto quasi? Expedita quas libero, quis molestias omnis itaque harum aliquid asperiores pariatur esse delectus dolores atque sequi illo eaque odit hic nobis vitae iste minima, eveniet fugit minus, similique sunt. Quis dolore accusantium reiciendis eum magni quidem sequi. Corrupti officiis nulla adipisci labore assumenda unde quidem!',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judul-kedua',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam minima eligendi, repellat dolore est voluptatibus veniam eos iure numquam ea culpa sint atque doloribus accusamus suscipit amet quos expedita. Eveniet magni commodi officia ullam itaque provident eligendi modi vero, fugiat debitis dicta blanditiis, delectus pariatur. Laudantium consequatur, explicabo nulla itaque ipsam tempore architecto quasi? Expedita quas libero, quis molestias omnis itaque harum aliquid asperiores pariatur esse delectus dolores atque sequi illo eaque odit hic nobis vitae iste minima, eveniet fugit minus, similique sunt. Quis dolore accusantium reiciendis eum magni quidem sequi. Corrupti officiis nulla adipisci labore assumenda unde quidem!',
    //         'category_id' => 1,
    //         'user_id' => 2
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judul-ketiga',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam minima eligendi, repellat dolore est voluptatibus veniam eos iure numquam ea culpa sint atque doloribus accusamus suscipit amet quos expedita. Eveniet magni commodi officia ullam itaque provident eligendi modi vero, fugiat debitis dicta blanditiis, delectus pariatur. Laudantium consequatur, explicabo nulla itaque ipsam tempore architecto quasi? Expedita quas libero, quis molestias omnis itaque harum aliquid asperiores pariatur esse delectus dolores atque sequi illo eaque odit hic nobis vitae iste minima, eveniet fugit minus, similique sunt. Quis dolore accusantium reiciendis eum magni quidem sequi. Corrupti officiis nulla adipisci labore assumenda unde quidem!',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Keempat',
    //         'slug' => 'judul-keempat',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam minima eligendi, repellat dolore est voluptatibus veniam eos iure numquam ea culpa sint atque doloribus accusamus suscipit amet quos expedita. Eveniet magni commodi officia ullam itaque provident eligendi modi vero, fugiat debitis dicta blanditiis, delectus pariatur. Laudantium consequatur, explicabo nulla itaque ipsam tempore architecto quasi? Expedita quas libero, quis molestias omnis itaque harum aliquid asperiores pariatur esse delectus dolores atque sequi illo eaque odit hic nobis vitae iste minima, eveniet fugit minus, similique sunt. Quis dolore accusantium reiciendis eum magni quidem sequi. Corrupti officiis nulla adipisci labore assumenda unde quidem!',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);
    }
}
