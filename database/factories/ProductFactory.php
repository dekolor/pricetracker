<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Store;
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
            'store_id' => Store::factory()->create(),
            'user_id' => '1',
            'name' => fake()->realTextBetween(7, 32),
            'url' => fake()->url,
            'price_id' => '1'
        ];
    }
}
