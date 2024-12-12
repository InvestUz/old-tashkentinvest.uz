<?php

namespace Database\Seeders;

use App\Models\RuxsatnomaTuri;
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
        $this->call([
            SystemInitSeeder::class,
            StreetsTableSeeder::class,
            NewsSeeder::class,
            // ProductsTableSeeder::class,
            // ProductSeeder::class,

            CategoriesTableSeeder::class,
            ProjectsTableSeeder::class,
            ProjectStagesTableSeeder::class,
            ProjectDocumentsTableSeeder::class,

        ]);
    }
}
