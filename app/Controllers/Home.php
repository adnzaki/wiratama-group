<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'heros' => $this->hero()
        ];
        
        return view('home/main', array_merge($this->commonData(), $data));
    }

    private function hero()
    {
        $data = [
            [
                'image'         => 'wr-hero-2.png',
                'address'       => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
                'tagline'       => 'Hunian Eksklusif dengan Sentuhan Futuristik',
                'description'   => 'Kemewahan modern dengan desain inovatif dan teknologi canggih yang menghadirkan kenyamanan sekaligus keanggunan.',
                'buttonUrl'     => '#',
            ]
        ];

        return $data;
    }
}
