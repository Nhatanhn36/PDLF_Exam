<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id"=>$this->faker->randomNumber(),
            "name"=>$this->faker->firstName,
            "age"=>$this->faker->numberBetween(18, 35),
            "address"=>$this->faker->address,
            "telephone"=>$this->faker->tollFreePhoneNumber()
        ];
    }
}
