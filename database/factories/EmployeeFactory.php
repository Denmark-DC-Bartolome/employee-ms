<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => $this->faker->unique()->numerify('S-####'),
            'name' => $this->faker->name(),
            'department' => $this->faker->randomElement(['Human Resources', 'Finance & Accounting', 'Marketing & Sales', 'Information Technology', 'Research & Development' ]),
            'phone_number' => $this->faker->numerify('09#########'),
        ];
    }
}
