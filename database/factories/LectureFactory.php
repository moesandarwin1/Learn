<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word,
            'description'=>$this->faker->paragraph,
            'video_url' => 'https://youtu.be/' . fake()->regexify('[A-Za-z0-9]{11}'),
            'sort_order' => fake()->unique()->numberBetween(1, 100),
            'category_id'=>rand(1,10),
            'course_id'=>rand(1,10),
            'chapter_id'=>rand(1,10),
        ];
    }
}
