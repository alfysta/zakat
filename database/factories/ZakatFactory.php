<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zakat>
 */
class ZakatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'nama' => fake()->name(),
            'jiwa' => Str::random(1),
            'bayar' => ['beras', 'uang'],
            'infaq' => Str::random(5),
            'sedekah' => Str::random(5),
        ];
    }
}
