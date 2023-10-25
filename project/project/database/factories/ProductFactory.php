<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->name(),
            "category_id"=>rand(1,4),
            "mrp"=>rand(100,400),
            "sale_price"=>rand(50,350),
            "sku"=>fake()->name(),
            'description' => fake()->name(),
            'short_description' => fake()->name(),
            'specification' => fake()->name(),
            'tags' => fake()->name(),
            'brand' => fake()->name(),
            'high_lights' => fake()->name(),
        ];
    }
}
