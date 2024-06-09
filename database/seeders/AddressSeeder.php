<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'address' => 'alexandria',
            'latitude' => '30.033333',
            'longitude' => '31.233334',
            'user_id' => 12,
            'city_id' => 2
        ]);
    }
}
