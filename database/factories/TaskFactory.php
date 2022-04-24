<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_id' => random_int(1, 10),
            'user_id' => random_int(1, 10),
            'title' => $this->faker->text,
            'deadline' => $this->faker->dateTime
        ];
    }
}
