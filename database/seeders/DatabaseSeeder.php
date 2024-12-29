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
        $this->call([
            UserSeeder::class,
            ThemeSeeder::class,
            ShopSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            ProductCategorySeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            SettingSeeder::class,
            ShopUserSeeder::class,
        ]);
    }
}
