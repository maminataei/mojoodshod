<?php

namespace Database\Seeders;

use App\Models\ShopUser;
use Illuminate\Database\Seeder;

class ShopUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShopUser::factory()
            ->count(10)
            ->create();
    }
}
