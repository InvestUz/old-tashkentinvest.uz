<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        $filePath = public_path('assets/Renovatsiya_posts.xlsx'); // Update path if needed

        // Load the Excel file into an array
        $data = Excel::toArray([], $filePath);

        if (empty($data) || !isset($data[0])) {
            $this->command->error("Failed to load data from Excel file: $filePath");
            return;
        }

        $rows = $data[0]; // Take the first sheet's data

        // Assuming the first row is a header row, we skip it
        foreach (array_slice($rows, 1) as $row) {
            // Parse the first and second stage date ranges
            $startDates = $this->parseDateRange($row[4] ?? null);
            $secondStageDates = $this->parseDateRange($row[5] ?? null);

            // Map the status from Excel to a valid enum value if needed
            $statusValue = $row[6] ?? null;
            if ($statusValue === '1_step') {
                $statusValue = '1_step';
            }

            Project::create([
                'unique_number' => null,
                'district' => $row[0] ?? null,
                'mahalla' => $row[1] ?? null,
                'land' => $row[2] ?? null,
                'srok_realizatsi' => isset($row[3]) ? floatval($row[3]) : null,
                // Set implementation_period to null or derive if needed
                'implementation_period' => null,
                'start_date' => $startDates['start_date'],
                'end_date' => $startDates['end_date'],
                'second_stage_start_date' => $secondStageDates['start_date'],
                'second_stage_end_date' => $secondStageDates['end_date'],
                'status' => $statusValue,
            ]);
        }

        $this->command->info("Projects table seeded successfully from Excel file!");
    }

    /**
     * Parse a date range (e.g., "06.12.2024 - 16.12.2024") into start and end dates.
     *
     * @param string|null $dateRange
     * @return array
     */
    private function parseDateRange($dateRange)
    {
        if (!$dateRange) {
            return ['start_date' => null, 'end_date' => null];
        }

        $dates = explode(' - ', $dateRange);

        try {
            $startDate = isset($dates[0]) 
                ? Carbon::createFromFormat('d.m.Y', trim($dates[0]))->format('Y-m-d') 
                : null;
            $endDate = isset($dates[1]) 
                ? Carbon::createFromFormat('d.m.Y', trim($dates[1]))->format('Y-m-d') 
                : null;
        } catch (\Exception $e) {
            $startDate = null;
            $endDate = null;
        }

        return [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
