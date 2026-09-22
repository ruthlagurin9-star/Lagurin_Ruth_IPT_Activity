<?php

namespace Database\Factories;

use App\Models\courses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class coursesFactory extends Factory
{
    protected $model = courses::class;
    
    public function definition(): array
    {
  
    return [
        'name' => fake()->words(3,true),
        'description' => fake()->text(300),
        'category' => fake()->randomElement([
            'CAST',
            'CON',
            'CCJ',
            'COE',
            'COBHM',
            ])
            //
        ];
    }
}
