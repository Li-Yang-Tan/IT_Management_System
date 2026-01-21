<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asset;
use App\Models\User;

class AssetManagementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'assigned_date' => $assignedDate = fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'returned_date' => fake()->dateTimeBetween($assignedDate, '+1 year')->format('Y-m-d'),
            'asset_id' => Asset::inRandomOrder()->first()->id,
            'emp_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
