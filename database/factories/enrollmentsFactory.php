<?php

namespace Database\Factories;

use App\Models\enrollments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class enrollmentrsFactory extends Factory
{
    protected $model = enrollments::class;
    
    public function definition(): array
    {
  
    return [
        'name' => fake()->words(3,true),
        'description' => fake()->text(300),
        'category' => fake()->randomElement([
            'GEELEC',
            'PATHFIT',
            'DESCRETE MATH',
            'PERDEV',
            ])
            //
        ];
    }
}
