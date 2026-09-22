<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Database\Seeder;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        students::factory()->count(50)->create();
        //
    }
}
