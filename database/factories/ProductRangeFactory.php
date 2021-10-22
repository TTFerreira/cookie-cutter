<?php

namespace Database\Factories;

use App\Models\ProductRange;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductRangeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductRange::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_range_name'        => $this->faker->sentence(2)
        ];
    }
}
