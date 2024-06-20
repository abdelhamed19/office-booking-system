<?php

namespace Database\Factories;

use App\Models\Office;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'lat' => $this->faker->latitude,
            'lng'=>  $this->faker->longitude,
            'address_line1'=> $this->faker->address,
            'approval_status'=> Office::APPROVAL_ACCEPTED,
            'hidden'=> false,
            'daily_price'=> $this->faker->numberBetween(1000,2000),
            'monthly_discount'=> 0,
        ];
    }
}
