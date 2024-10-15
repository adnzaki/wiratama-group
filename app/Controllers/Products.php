<?php namespace App\Controllers;

class Products extends BaseController
{
    public function wiratamaEstate3()
    {
        $home = new Home();
        $data = [
            'pageTitle'     => 'Wiratama Estate 3 - Rumah Modern dengan Sentuhan Bali',
            'products'      => $this->productList(),
            'facilities'    => $home->facilities(),
        ];

        return view('wiratama-estate-3/main', array_merge($this->commonData(), $data));
    }

    private function productList()
    {
        $data = [
            [
                'title' => 'Tipe Bima A & B',
                'thumbnail' => 'wr-bima-ab.png',
                'delay' => '800',
                'bath' => 'x1',
                'bed' => 'x2',
                'electricity' => '1300 watt',
                'wide' => '30 x 60 / 96 m2',
                'price' => 'Start from <b>Rp575.000.000</b>',
                'url' => '#',
            ],
            [
                'title' => 'Tipe Arjuna A, B, C & D',
                'thumbnail' => 'wr-arjuna.png',
                'delay' => '900',
                'bath' => 'x2',
                'bed' => 'x2',
                'electricity' => '2200 watt',
                'wide' => '50 x 60 / 75 / 96 / 120 m2',
                'price' => 'Start from <b>Rp812.500.000</b>',
                'url' => '#',
            ],
            [
                'title' => 'Ruko Hunian 2 Lantai',
                'thumbnail' => 'wr-ruko-hunian.png',
                'delay' => '1000',
                'bath' => 'x1',
                'bed' => 'x1',
                'electricity' => '2200 watt',
                'wide' => '58 x 85 m2',
                'price' => 'Start from <b>Rp1.187.500.000</b>',
                'url' => '#',
            ],
        ];

        return $data;
    }
}