<?php

namespace Database\Seeders;

use App\Models\Bloodpresure;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BloodpresureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Bloodpresure::create([
                'rate' => rand(50, 190),
                'systolic' => rand(100, 140),
                'diastolic' => rand(70, 120),
                'created_at' => Carbon::now()->subDay(rand(2, 20))->format('Y-m-d H:i:s'),
            ]);
        }
    }
}