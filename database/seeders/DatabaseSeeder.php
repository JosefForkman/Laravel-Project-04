<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Create categories in database
        // DB::table('categories')->insert([
        //     ['Name' => 'Tech'],
        //     ['Name' => 'Games'],
        //     ['Name' => 'Books'],

        // ]);

        //Fill User Table with dummy user
        // \App\Models\User::factory(10)->create();


        DB::table('product')->insert([
            [
                'Name' => 'Lord of the rings',
                'Price' => 150,
                'url' => 'https://kbimages1-a.akamaihd.net/7a557cb3-f72a-47c3-992b-951c9566e4d4/1200/1200/False/the-fellowship-of-the-ring-the-lord-of-the-rings-book-1-1.jpg',
                'categories_id' => 3,
            ],


            [
                'Name' => 'Elden ring',
                'Price' => 599,
                'url' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/LWU1Z3vAh706rXPr2zWkKjGe.png',
                'categories_id' => 2,
            ],
            [
                'Name' => 'Iphone 14 Pro',
                'Price' => 16490,
                'url' => 'https://images.ctfassets.net/nproz1mx87a8/CObWJS6AjcWLmTw1Jldgh/2f880485a43c768c280e604910ee7a9e/Apple-iPhone-14-Pro-Max-Deep-Purple-T2---front-back.png',
                'categories_id' => 1,

            ],

        ]);
    }
}
