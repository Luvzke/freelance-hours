<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array 
    {
        return [
            'title' => fake()->words(5),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+3 days'),
            'status' => fake()->randomElement(['open', 'closed0']),
            'tech_stack' => fake()->randomElements(['react', 'php', 'laravel', 'vue', 'tailwind', 'javascript', 'nextjs', 'python'], random_int(1,5)),
            'created_by' => User::factory(),
        ];
    }
}
