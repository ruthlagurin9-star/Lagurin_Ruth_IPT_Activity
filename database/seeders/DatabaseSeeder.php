<?php

namespace Database\Seeders;

use App\Models\students;
use App\Models\courses;
use App\Models\enrollments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            students::factory(50)->create();
    }
}