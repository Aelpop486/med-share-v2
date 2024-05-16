<?php

namespace Database\Seeders;

use App\Models\charit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        charit::create([
            'name' => 'charity',
            'email' => 'charity@gmail.com',
            'password' => Hash::make(12345678),
            'specialty_id' => 1,
        ]);
    }
}
