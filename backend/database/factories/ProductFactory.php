<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = $this->faker->company;
        $productType = $this->faker->word;
        return [
            'name' => ucfirst($brand) . ' ' . ucfirst($productType),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'description' => $this->faker->sentence,
        ];
    }
}
