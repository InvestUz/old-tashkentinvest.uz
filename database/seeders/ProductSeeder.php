<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'yer_uchastkasi_raqami' => 'MG1726269032/1',
                'tuman' => 'Mirzo Ulug\'bek',
                'mahalla' => 'Chingeldi MFY',
                'maydoni' => 0.0722,
                'mulk_huquqi' => '49 yilga ijara huquqi',
                'ixtisosligi' => 'Ofis, savdo va maishiy xizmat ko\'rsatish binolari',
                // 'created_at' =>  now(),
            ],
            [
                'yer_uchastkasi_raqami' => 'MG1726269032/2',
                'tuman' => 'Mirzo Ulug\'bek',
                'mahalla' => 'Chingeldi MFY',
                'maydoni' => 0.0821,
                'mulk_huquqi' => '49 yilga ijara huquqi',
                'ixtisosligi' => 'Ofis, savdo va maishiy xizmat ko\'rsatish binolari',
                // 'created_at' =>  now(),
            ],
            [
                'yer_uchastkasi_raqami' => 'MG1726269032/3',
                'tuman' => 'Mirzo Ulug\'bek',
                'mahalla' => 'Chingeldi MFY',
                'maydoni' => 0.0919,
                'mulk_huquqi' => '49 yilga ijara huquqi',
                'ixtisosligi' => 'Ofis, savdo va maishiy xizmat ko\'rsatish binolari',
                // 'created_at' =>  now(),
            ],
            [
                'yer_uchastkasi_raqami' => 'MG1726269033/7',
                'tuman' => 'Mirzo Ulug\'bek',
                'mahalla' => 'Iqtidor MFY',
                'maydoni' => 0.0126,
                'mulk_huquqi' => '49 yilga ijara huquqi',
                'ixtisosligi' => 'Ofis, savdo va maishiy xizmat ko\'rsatish binolari',
                // 'created_at' =>  now(),
            ],
            [
                'yer_uchastkasi_raqami' => 'MG1726269033/8',
                'tuman' => 'Mirzo Ulug\'bek',
                'mahalla' => 'Iqtidor MFY',
                'maydoni' => 0.0140,
                'mulk_huquqi' => '49 yilga ijara huquqi',
                'ixtisosligi' => 'Ofis, savdo va maishiy xizmat ko\'rsatish binolari',
                // 'created_at' =>  now(),
            ],
        ]);
    }
}
