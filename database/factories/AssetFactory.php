<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Laptop' => [
                'names'  => ['Office Laptop', 'Developer Laptop'],
                'brands' => ['Dell', 'HP', 'Lenovo', 'Apple'],
                'models' => ['Latitude 5420', 'EliteBook 840', 'ThinkPad T14', 'MacBook Pro'],
            ],
            'Desktop' => [
                'names'  => ['Office Desktop'],
                'brands' => ['Dell', 'HP', 'Acer'],
                'models' => ['OptiPlex 7090', 'ProDesk 400', 'Veriton X'],
            ],
            'Monitor' => [
                'names'  => ['24-inch Monitor', '27-inch Monitor'],
                'brands' => ['Dell', 'LG', 'Samsung'],
                'models' => ['P2419H', '27GL850', 'S80UA'],
            ],
            'Printer' => [
                'names'  => ['Office Printer'],
                'brands' => ['HP', 'Canon', 'Brother'],
                'models' => ['LaserJet Pro', 'PIXMA G3010', 'HL-L2350DW'],
            ],
            'Network Device' => [
                'names'  => ['Office Router', 'Network Switch'],
                'brands' => ['Cisco', 'TP-Link', 'Ubiquiti'],
                'models' => ['ISR 4331', 'TL-SG1024', 'UniFi Switch 24'],
            ],
        ];
        $category = fake()->randomElement(array_keys($categories));
        $item = $categories[$category];

        $purchasedAt = fake()->dateTimeBetween('-3 years', 'now');

        return [
            'name' => fake()->randomElement($item['names']),
            'category' => $category,
            'brand' => fake()->randomElement($item['brands']),
            'model' => fake()->randomElement($item['models']),
            'purchased_at' => $purchasedAt->format('Y-m-d'),
            'warranty_time' => fake()
                ->dateTimeBetween($purchasedAt, '+3 years')
                ->format('Y-m-d'),
        ];
    }
}
