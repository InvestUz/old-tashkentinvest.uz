<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectStage;
use App\Models\ProjectDocument;
use Illuminate\Support\Facades\DB;

class ProjectQualificationSeeder extends Seeder
{
    public function run()
    {
        // Optional: If you have districts and streets tables
        // Insert district
        $shayhantahurDistrictId = DB::table('districts')->insertGetId([
            'name_ru' => 'Шайхантахурский район',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert street
        $labzakStreetId = DB::table('streets')->insertGetId([
            'name' => 'Махалля "Лабзак"',
            'district_id' => $shayhantahurDistrictId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // If you don't have separate tables, just skip the above and use static data.

        // Create main category "Инвесторам" if it doesn't exist
        $investorsCategory = Category::firstOrCreate(
            ['slug' => 'investoram'],
            ['name' => 'Инвесторам', 'parent_id' => null]
        );

        // Create subcategory "Строительные инвестиционные проекты"
        $constructionProjectsCategory = Category::firstOrCreate(
            ['slug' => 'stroitelnye-investicionnye-proekty'],
            ['name' => 'Строительные инвестиционные проекты', 'parent_id' => $investorsCategory->id]
        );

        // Create the project
        $project = Project::create([
            'category_id' => $constructionProjectsCategory->id,
            'image' => '/uploads/projects/project1.jpg', // adjust as needed
            'district_id' => $shayhantahurDistrictId,
            'street_id' => $labzakStreetId,
            'land' => 1.46,
            'implementation_period' => 36, // 36 месяцев
            'status' => 'step_1',
        ]);

        // Create stages
        ProjectStage::create([
            'project_id' => $project->id,
            'name' => 'Первый этап. Квалификационный отбор участников.',
            'start_date' => '2024-12-06',
            'end_date' => '2024-12-16',
            'description' => 'Описание первого этапа, если необходимо'
        ]);

        ProjectStage::create([
            'project_id' => $project->id,
            'name' => 'Второй этап. Рассмотрение предложений участников.',
            'start_date' => '2024-12-23',
            'end_date' => '2024-01-15',
            'description' => 'Описание второго этапа, если необходимо'
        ]);

        // Create documents
        ProjectDocument::create([
            'project_id' => $project->id,
            'title' => 'Объявление 1 этапа',
            'file_path' => '/docs/announcement_step1.pdf',
        ]);

        ProjectDocument::create([
            'project_id' => $project->id,
            'title' => 'Объявление 2 этапа',
            'file_path' => '/docs/announcement_step2.pdf',
        ]);

        ProjectDocument::create([
            'project_id' => $project->id,
            'title' => 'Протокол',
            'file_path' => '/docs/protocol.pdf',
        ]);
    }
}
