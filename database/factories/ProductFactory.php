<?php
namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word() . ' ' . fake()->word(),  // Better for product names
            'description' => fake()->paragraph( ),
            'category_id' => Category::inRandomOrder()->first()->id,
            'price' => fake()->randomFloat(2, 1, 50),
        ];
    }
}