<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iteration>
 */
class IterationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => function () {
                return (Project::first() ?? Project::factory()->create())->id;
            },
            'name' => implode(' ', $this->faker->words),
            'count' => function () {
                return Project::first()->iterations()->count() + 1;
            }
        ];
    }
}
