<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'image'=>$this->faker->imageUrl,
            'price' =>$this->faker->numberBetween(100000,90000),
            'description'=>$this->faker->paragraph,
            'category_id'=>rand(1,10),
        ];
    }
}
