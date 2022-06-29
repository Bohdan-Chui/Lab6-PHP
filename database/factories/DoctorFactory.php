<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
            'name' => 'Doctor: '.$this->faker->name,
            'profession' => 'Profession: '.$this->faker->word(),
            'description' => $this->faker->word()
        ];
    }
}
