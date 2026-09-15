<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    
    public function definition(): array
    {
  
    return [
        'name' => fake()->words(3,true),
        'description' => fake()->text(300),
        'category' => fake()->randomElement([
            'home',
            'fashion',
            'electronics',
            'hardware',
            'perishable goods',
            ])
            //
        ];
    }
}
