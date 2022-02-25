<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;

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
            'name' => 'Nur Afdhaliyah',
            'username' => 'aliyah',
            'email' => 'aliyah@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(2)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();
    }
}
