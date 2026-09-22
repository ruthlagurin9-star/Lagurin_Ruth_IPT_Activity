<?php

namespace Database\Seeders;

use App\Models\enrollments;
use Illuminate\Database\Seeder;

class enrollmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        enrollments::factory()->count(50)->create();
        //
    }
}
