<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectDocument;
use Illuminate\Database\Seeder;

class ProjectDocumentsTableSeeder extends Seeder
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
            ProjectDocument::create([
                'project_id' => $project->id,
                'title' => 'Protocol Step 1',
                'file_path' => 'documents/protocol_step1_YUN0001.pdf',
            ]);

            // Add more documents as needed
        }

        // Repeat for other projects
    }
}
