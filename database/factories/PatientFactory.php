<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Patient: '.$this->faker->name,
            'doctor_id' => $this->faker->numberBetween(1,5),
            'age' => $this->faker->numberBetween(1,99)
        ];
    }
}
