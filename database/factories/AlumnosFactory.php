<?php

namespace Database\Factories;

use App\Models\Alumnos;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumnos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName($gender = 'male' | 'female'),
            'apellidos' => $this->faker->lastName,
            'mail' => $this->faker->unique()->email,
            'telefono' => $this->faker->optional()->phoneNumber,
        ];
    }
}
