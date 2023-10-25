<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductImage;

class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_id" => rand(1, 10),
            // 'small_img' => asset('images/products/' . $this->faker->name() . '.jpg'),
            'small_img' => 'images/products/small_img/smalldemo.webp',
            'medium_img' => 'images/products/medium_img/mediumdemo.webp',
            'large_img' => 'images/products/large_img/largedemo.webp',
        ];
    }
}
