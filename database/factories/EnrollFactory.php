<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enroll>
 */
class EnrollFactory extends Factory
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
            'phone'=>$this->faker->phoneNumber,
            'image'=>$this->faker->imageUrl,
            'status'=>$this->faker->word,
            'course_id'=>rand(1,10),
            'payment_id'=>rand(1,10),

        ];
    }
}
