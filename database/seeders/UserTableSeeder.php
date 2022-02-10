<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alberto França',
            'tenant_id' => 1,
            'email' => 'alberttttojrfsa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123mudar'),
            'remember_token' => Str::random(10),
            ]);

    }
}
