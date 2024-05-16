<?php

namespace Database\Seeders;

use App\Models\specialty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        specialty::create([
            'title' => 'specialty 1',
            'description' => 'specialty description 1',
            'image' => 'specialty1.jpg',
            'admin_id' => '1',
        ]);
    }
}
