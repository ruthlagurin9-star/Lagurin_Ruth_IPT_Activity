<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class studentsFactory extends Factory
{
    protected $model = students::class;
    
    public function definition(): array
    {
  
    return [
        'name' => fake()->words(3,true),
        'description' => fake()->text(300),
        'category' => fake()->randomElement([
            'ruth',
            'joana',
            'jamaica',
            'sarah',
            'loyld',
            ])
            //
        ];
    }
}
