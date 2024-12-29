<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seeders = [
            CategorySeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            SettingSeeder::class,
            ShopSeeder::class,
            ThemeSeeder::class,
            UserSeeder::class,
            ShopUserSeeder::class,
        ];

        foreach ($seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
