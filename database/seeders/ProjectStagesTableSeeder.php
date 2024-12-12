<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectStage;
use Illuminate\Database\Seeder;

class ProjectStagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example for project YUN0001
        $project = Project::where('unique_number', 'YUN0001')->first();
        if ($project) {
            ProjectStage::create([
                'project_id' => $project->id,
                'name' => '1 этап',
                'start_date' => '2024-09-05',
                'end_date' => '2024-09-12',
                'description' => 'Проверка процедуры банкротства, налоговой задолженности и строительный опыт',
                'protocol_signed' => false,
            ]);

            // Add more stages as needed
        }

        // Repeat for other projects
    }
}
