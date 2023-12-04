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
            'product_title'=>fake()->title(),
            'category_id' => '1',
            'product_price' => '10$',
            'product_length' => fake()->numberBetween(1,10)."metres",
            'product_width' => fake()->numberBetween(1,10)."metres",
        ];
    }
}
