<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'price' => $this->faker->randomNumber(5),
            'stock' => $this->faker->randomNumber(2),
            'img' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'company' => $this->faker->company(),
        ];
    }
}
