<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
            'brand_name' => Models\Brand::inRandomOrder()->first()->name,
            'model' => $this->faker->word(),
            'desc' => $this->faker->sentence(),
            'identifier' => $this->faker->ean13(),
            'identifier_type' => Models\IdentifierType::inRandomOrder()->first()->type,
            'category_type' => Models\Category::inRandomOrder()->first()->type,
            'price' => $this->faker->randomNumber(2),
            'discount_id' => Models\DiscountId::first()->id
            
        ];
    }
}
