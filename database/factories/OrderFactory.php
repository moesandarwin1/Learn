<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word,
            'email'=>$this->faker->unique()->email(),
            'phone'=>$this->faker->phoneNumber,
            'payment_slip'=>$this->faker->imageUrl,
            'course_id'=>rand(1,10),
            'payment_id'=>rand(1,10)
        ];
    }
}
