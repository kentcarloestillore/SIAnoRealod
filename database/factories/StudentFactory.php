<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'last_name'     =>fake()->lastname(),
            'first_name'    =>fake()->firstname(),
            'birth_date'    =>fake()->date(),
            'address'       =>fake()->address(),
        ];
    }
}
