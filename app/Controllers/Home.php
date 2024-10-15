<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle'             => 'Wiratama Group - Hunian Modern, Mewah, dan Terjangkau',
            'heros'                 => $this->hero(),
            'overview'              => $this->overview(),
            'facilities'            => $this->facilities(),
            'properties'            => $this->wiratamaEstate3Slider(),
            'youtubeLink'           => 'https://www.youtube.com/watch?v=KIJAv5XEgQw',
            'video-thumb'           => 'wr-video-thumbnail.png',
            'wiratamaResidence2'    => $this->wiratamaResidence2Slider(),
            'posts'                 => wp()->setPerPage(3)->getPosts(1)
        ];
        
        return view('home/main', array_merge($this->commonData(), $data));
    }

    private function wiratamaResidence2Slider()
    {
        $images = [
            'wr-img-1.png',
            'wr-img-2.png',
            'wr-img-3.png',
            'wr-img-4.png',
        ];

        return $images;
    }

    private function wiratamaEstate3Slider()
    {
        $images = [
            'wr-bima-1.png',
            'wr-bima-2.png',
            'wr-bima-3.png',
            'wr-bima-4.png',
            'wr-bima-5.png',
            'wr-bima-6.png',
            'wr-bima-7.png'
        ];

        return $images;
    }

    public function facilities()
    {
        $facilities = [
            [
                'img' => 'wr-facility-1.png',
                'space' => false,
                'number' => '01',
                'title' => 'Pasar Setu',
                'description' => 'Dekat Pasar Setu, memenuhi kebutuhan harian Anda dengan mudah.',
                'speed' => 800
            ],
            [
                'img' => 'wr-facility-2.png',
                'space' => true,
                'number' => '02',
                'title' => 'Jalan Tol Cibitung-Cimanggis',
                'description' => 'Akses tol cepat, memudahkan perjalanan Anda.',
                'speed' => 1000
            ],
            [
                'img' => 'wr-facility-3.png',
                'space' => false,
                'number' => '03',
                'title' => 'SMAN 1 Setu',
                'description' => 'Dekat sekolah menengah atas, nyaman untuk pendidikan anak.',
                'speed' => 1100
            ],
            [
                'img' => 'wr-facility-4.png',
                'space' => true,
                'number' => '04',
                'title' => 'Minimarket',
                'description' => 'Minimarket terdekat, kebutuhan sehari-hari selalu terjangkau.',
                'speed' => 1200
            ]
        ];

        return $facilities;

    }


    private function overview()
    {
        $data = [
            'title'         => 'Rasakan Keanggunan dan Kenyamanan di Hunian Impian',
            'description'   => 'Nikmati konsep rumah Modern, Futuristik, dan Mewah di Wiratama Estate 3, yang dirancang untuk gaya hidup premium dengan harga terjangkau.<br/><br/> 
                                Sementara itu, Wiratama Residence 2 menawarkan desain Skandinavia yang elegan dan sederhana, menghadirkan kehangatan dan kenyamanan dalam setiap sudut hunian.',
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
                'image'         => 'wr-hero-3.webp',
                'address'       => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
                'tagline'       => 'Hunian Eksklusif dengan Sentuhan Futuristik',
                'description'   => 'Kemewahan modern dengan desain inovatif dan teknologi canggih yang menghadirkan kenyamanan sekaligus keanggunan.',
                'buttonUrl'     => '#',
            ],
            [
                'image'         => 'wr-hero-4.webp',
                'address'       => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
                'tagline'       => 'Keanggunan Skandinavia, Hadir di Rumah Anda',
                'description'   => 'Nikmati keindahan dan kesederhanaan desain Skandinavia yang menyatu sempurna dengan kenyamanan hunian Anda.',
                'buttonUrl'     => '#',
            ]
        ];

        return $data;
    }
}
