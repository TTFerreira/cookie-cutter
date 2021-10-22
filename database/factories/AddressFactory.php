<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_address'        => $this->faker->streetAddress(),
            'suburb'                => $this->faker->cityPrefix(),
            'city'                  => $this->faker->city(),
            'postal_code'           => $this->faker->postCode(),
            'customer_id'           => $this->faker->numberBetween(1, 10)
        ];
    }
}
