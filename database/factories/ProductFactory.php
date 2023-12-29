<?php

namespace Database\Factories;

use App\Models\Product;
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
     *
     */
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'ItemName' => $this->faker->word,
            'ImageUrl' => $this->faker->url,
            'ItemPrice' => $this->faker->randomFloat(10, 2),
            'ItemDescription' => $this->faker->text()

        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Product $product) {
            $product->ItemName = 'Laptop';
            $product->ImageUrl = 'Laptop';
            $product->ItemPrice = 100;
            $product->ItemDescription = 'Laptop';

        });
    }
}
