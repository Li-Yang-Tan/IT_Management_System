<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Asset;
use App\Models\AssetManagement;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        Asset::factory()->count(10)->create();
        AssetManagement::factory(10)->create();
    }
}
