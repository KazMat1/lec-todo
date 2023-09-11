<?php

namespace Database\Factories;

use App\Models\Folder;
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
    public function definition(): array
    {
        $statuses = [1,2,3];
        $folders = Folder::get();
        $int = random_int(1, 10);
        $now = now();

        return [
            'folder_id' => $folders->random()->id,
            'title' => $this->faker->title(),
            'due_date' => $now->modify("+{$int}day"),
            'status' => $this->faker->randomElements($statuses),
            'created_at' => $now,
            'updated_at' => $now,
        ];
    }
}
