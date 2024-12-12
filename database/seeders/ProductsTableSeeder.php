<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Shuchkin\SimpleXLSX;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
   
    public function run()
    {
        $filePath = storage_path('app/references/cleaned_file.xlsx');

        if (!file_exists($filePath)) {
            \Log::error('File not found: ' . $filePath);
            return;
        }

        if ($xlsx = SimpleXLSX::parse($filePath)) {
            $rows = $xlsx->rows();
            array_shift($rows); // Remove the header row if necessary

            foreach ($rows as $row) {           
                // Extract data from the row
                $yer_uchastkasi_raqami = trim($row[1]);
                $shartnoma_sanasi = trim($row[13]); // 'Шартнома санаси'
                $shartnoma_raqami = trim($row[14]); // 'Шартнома рақами'
                $tuman = trim($row[4]);
                $mahalla = trim($row[5]);
                $manzil = trim($row[6]);
                $maydoni =  trim($row[7]);
                // $this->parseDecimal(trim($row[8]))
                $tahmini_baholangan_qiymat =  $this->parseDecimal(trim($row[8]));
                $baholash_date = $this->parseDate($shartnoma_sanasi); // Extract date from 'shartnoma_sanasi'
                // $tahmini_baholangan_qiymat = $this->parseDecimal(trim($row[9]));
                $narx_sotix_som = $this->parseDecimal(trim($row[10]));
                $narx_sotix_usd = $this->parseDecimal(trim($row[11]));
                $atsenka_elektron = trim($row[12]);

                // Map `tuman` to `tuman_user_id`
                $tuman_user_id = $this->getTumanUserId($tuman);

                // Insert data into the database
                try {
                    DB::table('products')->insert(
                        [
                            'yer_uchastkasi_raqami' => $yer_uchastkasi_raqami ?? null,
                            'tuman' => $tuman ?? null,
                            'mahalla' => $mahalla ?? null,
                            'manzil' => $manzil ?? null,
                            'maydoni' => $maydoni ?? null,
                            'baholash_date' => $baholash_date ?? null,
                            'tahmini_baholangan_qiymat' => $tahmini_baholangan_qiymat ?? null,
                            'narx_sotix_som' => $narx_sotix_som ?? null,
                            'narx_sotix_usd' => $narx_sotix_usd ?? null,
                            'shartnoma_raqami' => $shartnoma_raqami ?? null,
                            'shartnoma_sanasi' => $baholash_date ?? null, // Assuming same date for simplicity
                            'atsenka_elektron' => $atsenka_elektron ?? null,
                            'tuman_user_id' => $tuman_user_id ?? null, // Add this if needed
                            'baholash_user_id' => null ?? null, // Set these according to your logic
                            'invest_user_id' => null ?? null, // Set these according to your logic
                        ]
                    );
                    \Log::info('Inserted row for yer_uchastkasi_raqami: ' . $yer_uchastkasi_raqami);
                } catch (\Exception $e) {
                    \Log::error('Failed to insert row for yer_uchastkasi_raqami: ' . $yer_uchastkasi_raqami . ' - Error: ' . $e->getMessage());
                }
            }

            \Log::info('Data imported successfully.');
        } else {
            \Log::error('Failed to parse Excel file.');
        }
    }

    private function parseDate($dateString)
    {
        try {
            // Extract only the date part (before any non-date characters)
            $datePart = preg_replace('/[^0-9.]/', '', $dateString);
            return Carbon::createFromFormat('d.m.Y', $datePart)->format('Y-m-d');
        } catch (\Exception $e) {
            \Log::error('Date parsing error: ' . $e->getMessage() . ' for date: ' . $dateString);
            return null;
        }
    }

    private function parseDecimal($value)
    {
        // Remove non-numeric characters (e.g., commas) and convert to decimal
        $cleanValue = preg_replace('/[^\d.,-]/', '', $value);
        return is_numeric($cleanValue) ? (float) str_replace(',', '.', $cleanValue) : null;
    }

    private function getTumanUserId($tumanName)
    {
        // Map tuman names to user IDs
        $tumanUserIds = [
            'Учтепа тумани' => 4, // Replace with actual IDs
            'Бектемир тумани' => 5,
            'Чилонзор тумани' => 6,
            'Яшнобод тумани' => 7,
            'Яккасарой тумани' => 8,
            'Сергели тумани' => 9,
            'Юнусобод тумани' => 10,
            'Олмазор тумани' => 11,
            'Мирзо Улуғбек тумани' => 12,
            'Шайхонтохур тумани' => 13,
            'Миробод тумани' => 14,
            'Янгиҳаёт тумани' => 15,
        ];

        return $tumanUserIds[$tumanName] ?? null;
    }
}
