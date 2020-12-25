<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'name' => $this->faker->firstName($gender = null),
            'lastname' => $this->faker->lastName(),
            'birthday' => $this->faker->dateTimeBetween($startDate = '-40 years', $endDate = '-30 years', $timezone = null),
            'career_id' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}
