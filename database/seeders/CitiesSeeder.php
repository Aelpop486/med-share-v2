<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Cairo',
            'Alexandria',
            'Giza',
            'Shubra El Kheima',
            'Port Said',
            'Suez',
            'Luxor',
            'Mansoura',
            'El-Mahalla El-Kubra',
            'Tanta',
            // Add more cities as needed
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    
    }
}
