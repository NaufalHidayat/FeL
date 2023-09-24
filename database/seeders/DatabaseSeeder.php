<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Post::create([
            'title' => 'Judul Pertama',
            'slug' =>'judul-pertama',
            'excerpt' => 'Lorem ipsum Pertama',
            'body' => ' ini satu bossLorem ipsum dolor sit amet consectetur adipisicing elit. A enim quia, perferendis tempore veritatisasdassdaasdasdadsdas culpa minus, excepturi odio quo cumque, sit ratione aliquid voluptas alias nam. Nam at tenetur voluptate consequuntur mollitia molestias nostrum minima architecto, eligendi blanditiis tempore harum, ipsam distinctio! Ab, delectus ipsum sint totam placeat assumenda eum?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' =>'judul-kedua',
            'excerpt' => 'Lorem ipsum Kedua',
            'body' => ' ini satu bossLorem ipsum dolor sit amet consectetur adipisicing elit. A enim quia, perferendis tempore veritatisasdassdaasdasdadsdas culpa minus, excepturi odio quo cumque, sit ratione aliquid voluptas alias nam. Nam at tenetur voluptate consequuntur mollitia molestias nostrum minima architecto, eligendi blanditiis tempore harum, ipsam distinctio! Ab, delectus ipsum sint totam placeat assumenda eum?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' =>'judul-ketiga',
            'excerpt' => 'Lorem ipsum Ketiga',
            'body' => ' ini satu bossLorem ipsum dolor sit amet consectetur adipisicing elit. A enim quia, perferendis tempore veritatisasdassdaasdasdadsdas culpa minus, excepturi odio quo cumque, sit ratione aliquid voluptas alias nam. Nam at tenetur voluptate consequuntur mollitia molestias nostrum minima architecto, eligendi blanditiis tempore harum, ipsam distinctio! Ab, delectus ipsum sint totam placeat assumenda eum?',
            'category_id' => 2,
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul KeEmpat',
            'slug' =>'judul-keempat',
            'excerpt' => 'Lorem ipsum emapt',
            'body' => ' ini satu bossLorem ipsum dolor sit amet consectetur adipisicing elit. A enim quia, perferendis tempore veritatisasdassdaasdasdadsdas culpa minus, excepturi odio quo cumque, sit ratione aliquid voluptas alias nam. Nam at tenetur voluptate consequuntur mollitia molestias nostrum minima architecto, eligendi blanditiis tempore harum, ipsam distinctio! Ab, delectus ipsum sint totam placeat assumenda eum?',
            'category_id' => 2,
            'user_id' => 2
        ]);

        User::create([
            'name' => 'Naufal Hidayat',
            'email' =>'nh@gmail.com',
            'password'=> bcrypt(12345)
        ]);
        User::create([
            'name' => 'Sandika Galih',
            'email' =>'sg@gmail.com',
            'password'=> bcrypt(12345)
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' =>'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' =>'personal'
        ]);
    }
}
