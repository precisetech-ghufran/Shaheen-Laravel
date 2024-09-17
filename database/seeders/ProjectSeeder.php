<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 6 project records
        Project::insert([
            ['project_name' => 'Project Alpha', 'created_at' => now(), 'updated_at' => now()],
            ['project_name' => 'Project Beta', 'created_at' => now(), 'updated_at' => now()],
            ['project_name' => 'Project Gamma', 'created_at' => now(), 'updated_at' => now()],
            ['project_name' => 'Project Delta', 'created_at' => now(), 'updated_at' => now()],
            ['project_name' => 'Project Epsilon', 'created_at' => now(), 'updated_at' => now()],
            ['project_name' => 'Project Zeta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
