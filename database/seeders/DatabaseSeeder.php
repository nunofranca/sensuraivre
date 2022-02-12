<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Database\Factories\TenantFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TenantTableSeed::class,
//            PostTableSeeder::class,
            UserTableSeeder::class
        ]);
    }
}
