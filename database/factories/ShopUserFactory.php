<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopUser>
 */
class ShopUserFactory extends Factory
{
    protected $model = \App\Models\ShopUser::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' => $this->faker->randomDigitNotNull(),
            'user_id' => $this->faker->randomDigitNotNull(),
        ];
    }
}
