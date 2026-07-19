<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jemaat>
 */
class JemaatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jenisKelamin'=> fake()->word(),
            'alamat'=>fake()->address(),
            'noHp'=>fake()->phoneNumber(),
            'tempatLahir'=>fake()->city(),
            'tanggalLahir'=> fake()->date('d-m-Y'),
        ];
    }
}
