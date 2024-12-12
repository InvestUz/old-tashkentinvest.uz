<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example categories. Adjust as needed.
        $categories = [
            ['name' => 'Renovation Projects', 'slug' => 'renovation-projects', 'parent_id' => null],
            // Add more categories or subcategories if necessary
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
