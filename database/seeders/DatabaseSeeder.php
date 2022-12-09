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
        $admin = User::factory()->create([
            'is_admin' => true,
            'name' => 'Administrator',
            'email' => 'admin@atlas.dk',
        ]);

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@atlas.dk',
        ]);

        $project = Project::factory()->create();
        $project->users()->sync([$user->id, $admin->id]);

        $iteration = Iteration::factory()->create();
        Task::factory(10)->create();
    }
}
