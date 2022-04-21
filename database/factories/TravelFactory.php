<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return  [
            'departure' => $this->faker->city(),
            'destination' => $this->faker->city(),
            'dateOfDeparture' => $this->faker->dateTime(),
            'numberOfPassengers' => $this->faker->numberBetween(1, 7),
            'price' => $this->faker->numberBetween(10, 50),
            'user_id' => 15
        ];
    }
}
