<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\ShopUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class ShopUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShopUser::factory()
            ->has(Shop::factory()->count(3))
            ->has(User::factory()->count(3))
            ->count(10)
            ->create();
    }
}
