<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AkunPengguna>
 */
class AkunPenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Username' => $this->faker->userName,
            'Password' => bcrypt('password'), // atau bisa pakai Hash::make() jika ingin lebih aman
            'Peran' => $this->faker->randomElement(['admin', 'staf', 'pasien']),
        ];
    }
}
