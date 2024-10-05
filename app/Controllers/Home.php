<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'heros'     => $this->hero(),
            'overview'  => $this->overview(),
        ];
        
        return view('home/main', array_merge($this->commonData(), $data));
    }


    private function overview()
    {
        $data = [
            'title'         => 'Rasakan Keanggunan dan Kenyamanan di Hunian Impian',
            'description'   => 'Nikmati konsep rumah Modern, Futuristik, dan Mewah di Wiratama Estate 3, yang dirancang untuk gaya hidup premium dengan harga terjangkau.<br/><br/> Sementara itu, Wiratama Residence 2 menawarkan desain Mezzanine yang minimalis dan fungsional, menciptakan suasana hangat dan nyaman bagi setiap keluarga.',
            'image1'        => 'property-1.png',
            'image2'        => 'property-3.png',
        ];

        return $data;
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
