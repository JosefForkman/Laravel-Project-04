<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\categories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Create categories in database
        DB::table('categories')->insert([
            ['Name' => 'Tech'],
            ['Name' => 'Games'],
            ['Name' => 'Books'],

        ]);

        //Fill User Table with dummy user
        \App\Models\User::factory(10)->create();


        DB::table('products')->insert([
            [
                'Name' => 'Lord of the rings',
                'Price' => 150,
                'Description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id porttitor nunc. In maximus eget neque vel dictum. Vivamus congue nunc vel risus consectetur faucibus. Pellentesque nec imperdiet nulla, ac fermentum nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec porttitor nunc, a tristique dolor. Suspendisse potenti. Aliquam varius tincidunt vehicula. Aenean dignissim, dolor a cursus ornare, ligula est dapibus lorem, eu fringilla tortor felis quis massa. Phasellus dictum est justo, eu accumsan libero ultricies id. Morbi nec laoreet erat.",
                'url' => 'https://kbimages1-a.akamaihd.net/7a557cb3-f72a-47c3-992b-951c9566e4d4/1200/1200/False/the-fellowship-of-the-ring-the-lord-of-the-rings-book-1-1.jpg',
                'categories_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],


            [
                'Name' => 'Elden ring',
                'Price' => 599,
                'Description' => "Maecenas pellentesque, nunc nec gravida egestas, augue ex pulvinar turpis, ac ornare orci magna nec nisl. Sed lacus ligula, tristique et laoreet vitae, tristique a nisi. Donec ac ipsum quis massa semper interdum. Donec interdum ipsum tellus, eu lobortis mi semper sit amet. Aliquam pharetra, leo porta scelerisque egestas, lectus erat malesuada quam, ut eleifend lacus sem ut massa. Integer venenatis blandit cursus. Aenean fringilla turpis augue, sed semper massa tempor ut. Nullam in tincidunt lorem, sed viverra leo. Nunc nec lacus dui. Quisque pharetra, magna at finibus porta, nibh erat feugiat tortor, ac interdum nunc lacus tempus ipsum. Quisque venenatis porttitor enim. Morbi egestas ornare lorem. Phasellus ut commodo ligula, eu eleifend lacus. Vestibulum et malesuada nunc. Phasellus quis metus dolor.",
                'url' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/LWU1Z3vAh706rXPr2zWkKjGe.png',
                'categories_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'Name' => 'Iphone 14 Pro',
                'Price' => 16490,
                'Description' => "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer blandit pellentesque lorem, a pharetra ligula scelerisque sed. Proin dictum nibh lacus, sed ornare purus aliquam egestas. Mauris nec cursus felis. Integer molestie dui sed turpis ullamcorper, vel varius sapien consectetur. Integer magna sapien, lacinia eget orci tristique, mollis dictum dui. Nullam gravida risus gravida justo posuere maximus. Nunc quis dolor efficitur, lacinia elit vel, viverra ante. Suspendisse potenti. Aenean lacinia dapibus justo, ut feugiat est fringilla eget. In hac habitasse platea dictumst.",
                'url' => 'https://images.ctfassets.net/nproz1mx87a8/CObWJS6AjcWLmTw1Jldgh/2f880485a43c768c280e604910ee7a9e/Apple-iPhone-14-Pro-Max-Deep-Purple-T2---front-back.png',
                'categories_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],

        ]);

        \App\Models\comment::factory(10)->create();
    }
}
