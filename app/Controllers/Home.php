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
        // all hero images should placed under "public/assets/img/all-images/hero" directory
        $data = [
            [
                'image'         => 'wr-hero-3.png',
                'address'       => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
                'tagline'       => 'Hunian Eksklusif dengan Sentuhan Futuristik',
                'description'   => 'Kemewahan modern dengan desain inovatif dan teknologi canggih yang menghadirkan kenyamanan sekaligus keanggunan.',
                'buttonUrl'     => '#',
            ],
            [
                'image'         => 'wr-hero-4.png',
                'address'       => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
                'tagline'       => 'Hunian Mezzanine Berkonsep Scandinavia',
                'description'   => 'Gaya minimalis, fungsional, dan nyaman dengan nuansa hangat khas Skandinavia.',
                'buttonUrl'     => '#',
            ]
        ];

        return $data;
    }
}
