<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nama' => $this->faker->name,
            'Spesialisasi' => $this->faker->randomElement(['Umum', 'Gigi', 'Anak', 'Penyakit Dalam', 'Bedah']),
            'Nomor_Telepon' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
        ];
    }
}
