<?php

namespace Database\Seeders;

use App\Models\Iteration;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $project = Project::factory()->create();
        $project->users()->sync([$user->id]);

        $iteration = Iteration::factory()->create();
        Task::factory(10)->create();
    }
}
