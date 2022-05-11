<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class perjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user'=>'1',
            'tanggal'=>$this->faker->date(),
            'waktu'=>$this->faker->time(),
            'lokasi'=>$this->faker->address(),
            'Suhu'=>$this->faker->numberBetween(30, 40),
        ];
    }
}
