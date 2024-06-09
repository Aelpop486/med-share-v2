<?php

namespace Database\Seeders;

use App\Models\donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        donation::create([
            'description' => 'donation description 1',
            'user_id' => '1',
            'city_id' => '2',
        ]);
    }
}
