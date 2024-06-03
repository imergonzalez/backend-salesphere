<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    
    public function definition(): array {
        return [
            "nombre" => $this->faker->firstName(),
            "apellido" => $this->faker->lastName(),
            "usuario" => $this->faker->userName(),
            "correo" => $this->faker->email(),
            "passwrd" => bcrypt('password'),
            "create_time" => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
