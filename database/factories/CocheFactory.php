<?php

namespace Database\Factories;

use App\Models\Coche;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CocheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->name,
            'model' => $this->faker->paragraph,
            'produced_on' => $this->faker->dateTime('now', null)
        ];
    }
}