<?php

namespace Database\Factories;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'      => $this->faker->numberBetween(1, 10),
            'product_id'    => $this->faker->numberBetween(1, 10),
        ];
    }
}
