<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'color_id' => Color::factory()->create()->id,
            'brand_id' => Brand::factory()->create()->id,
        ];
    }
}
