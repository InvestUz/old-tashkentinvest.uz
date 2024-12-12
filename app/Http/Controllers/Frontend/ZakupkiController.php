<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ZakupkiController extends Controller
{
    private $zakupki = [
        [
            'id' => 1,
            'img' => 'https://static.tildacdn.com/tild3164-6336-4236-b966-623137346561/__2024-05-15__12804A.png',
            'title' => 'Вниманию независимым организациям, оказывающим профессиональные услуги по проведению оценки системы корпоративного управления',
            'date' => '15.05.2024',
            'description' => 'Акционерное общество «Компания Ташкент Инвест» согласно ст. 49, 50, 51 Закона Республики Узбекистан...',
            'contact' => 'Телефон: (+99871) 210-02-61, E-mail: info@toshkentinvest.uz'
        ],
        [
            'id' => 2,
            'img' => 'https://static.tildacdn.com/tild3638-6637-4131-a431-396532396134/komu-nuzhny-auditors.jpeg',

            'title' => 'Вниманию независимым организациям, оказывающим аудиторские услуги',
            'date' => '15.05.2024',
            'description' => 'Акционерное общество «Компания Ташкент Инвест» согласно ст. 49, 50, 51 Закона Республики Узбекистан...',
            'contact' => 'Телефон: (+99871) 210-02-61, E-mail: info@toshkentinvest.uz'
        ]
    ];

    public function index()
    {
     
        return view('pages.frontend.zakupki.index', ['zakupki' => $this->zakupki]);
    }

    public function show($id)
    {
        $zakupka = collect($this->zakupki)->firstWhere('id', $id);

        if (!$zakupka) {
            abort(404, 'Zakupka not found');
        }

        return view('pages.frontend.zakupki.show', ['zakupka' => $zakupka]);
    }
}
