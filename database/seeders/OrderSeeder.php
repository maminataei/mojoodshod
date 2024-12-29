<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()
            ->has(User::factory()->count(3))
            ->has(Shop::factory()->count(3))
            ->count(10)->create();
    }
}
