<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->has(Image::factory())->count(20)->create([
            'tenant_id' => 1,
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
