<?php

namespace Database\Factories;

use App\Models\Office;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
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
            'office_id' => Office::factory(),
            'price' => $this->faker->numberBetween(1000,2000),
            'status' => Reservation::STATUS_ACTIVE,
            'start_date' => now()->addDays(1)->format('Y-m-d') ,
            'end_date' => now()->addDays(5)->format('Y-m-d') ,
        ];
    }
}
