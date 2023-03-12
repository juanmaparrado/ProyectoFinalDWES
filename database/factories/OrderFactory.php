<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->city(),
            'total' => $this->faker->numberBetween(10, 200),
            'payment_method' => $this->faker->randomElement(['cash', 'card']),
            'user_id' => $this->faker->numberBetween(2, 5),
        ];
    }
}
