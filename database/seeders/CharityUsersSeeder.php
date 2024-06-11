<?php

namespace Database\Seeders;

use App\Models\Charity_users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharityUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Charity_users::create([
            'name' => 'User 1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '123456789',
            'isActive' => 1,
            'role' => 'admin',
            'charit_id' => 1,

        ]);
    }
}
