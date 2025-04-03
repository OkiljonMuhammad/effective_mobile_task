<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(2),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
