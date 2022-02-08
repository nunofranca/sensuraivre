<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class TenantTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::factory()
            ->has(Category::factory())
            ->has(User::factory()
            )->create();
    }
}
