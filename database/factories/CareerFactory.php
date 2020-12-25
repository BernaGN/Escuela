<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'name' => $this->faker->word(),
            'faculty_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
