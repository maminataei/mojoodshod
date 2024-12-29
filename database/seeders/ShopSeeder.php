<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::factory()
            ->has(Theme::factory()->count(3))
            ->has(User::factory()->count(3))
            ->count(10)->create();
    }
}
