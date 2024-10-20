<?php namespace App\Controllers;

class Products extends BaseController
{
    public function wiratamaEstate3()
    {
        $home = new Home();
        $common = $this->commonData();
        $data = [
            'pageTitle'     => 'Wiratama Estate 3 - Rumah Modern dengan Sentuhan Bali',
            'products'      => $this->wiratamaEstate3Products(),
            'facilities'    => $home->facilities(),
            'sendWhatsapp'  => 'https://api.whatsapp.com/send?phone=' . $common['contactWhatsapp'] . '&text=Halo,%20saya%20berminat%20dengan%20rumah%20modern%20ala%20Bali%20di%20Wiratama%20Estate%203.',
        ];

        return view('wiratama-estate-3/main', array_merge($this->commonData(), $data));
    }

    public function wiratamaResidence2()
    {
        $home = new Home();
        $common = $this->commonData();
        $data = [
            'pageTitle'     => 'Wiratama Residence 2 - Rumah Modern ala Skandinavia',
            'productName'   => 'Wiratama Residence 2',
            'products'      => $this->wiratamaResidence2Products(),
            'facilities'    => $home->facilities(),
            'sendWhatsapp'  => 'https://api.whatsapp.com/send?phone='.$common['contactWhatsapp'].'&text=Halo,%20saya%20berminat%20dengan%20rumah%20berkonsep%20Skandinavia%20di%20Wiratama%20Residence%202.',
        ];

        return view('wiratama-residence-2/main', array_merge($this->commonData(), $data));
    }

    private function wiratamaResidence2Products()
    {
        $baseURL = base_url('wiratama-residence-2/view/');
        $data = [
            [
                'title' => 'Tipe 36+7,5',
                'thumbnail' => 'wr-residence-1.webp',
                'delay' => '800',
                'bed' => 'x2',
                'building' => '43,50 m2',
                'wide' => '72 / 108 / 164 m2',
                'price' => 'Start from <b>Rp465.000.000</b>',
                'url' => $baseURL . 'tipe-435',
            ],
            [
                'title' => 'Tipe 32+5,5',
                'thumbnail' => 'wr-residence-2.webp',
                'delay' => '1000',
                'bed' => 'x2',
                'building' => '37,5 m2',
                'wide' => '60 - 149 m2',
                'price' => 'Start from <b>Rp400.000.000</b>',
                'url' => $baseURL . 'tipe-375',
            ],
        ];

        return $data;
    }

    private function wiratamaEstate3Products()
    {
        $baseURL = base_url('wiratama-estate-3/view/');
        $data = [
            [
                'title' => 'Tipe Bima A & B',
                'thumbnail' => 'wr-bima-ab.png',
                'delay' => '800',
                'bath' => 'x1',
                'bed' => 'x2',
                'electricity' => '1300 watt',
                'wide' => '30 x 60 / 96 m2',
                'price' => 'Start from <b>Rp460.000.000</b>',
                'url' => $baseURL . 'bima',
            ],
            [
                'title' => 'Tipe Arjuna A, B, C & D',
                'thumbnail' => 'wr-arjuna.png',
                'delay' => '900',
                'bath' => 'x2',
                'bed' => 'x2',
                'electricity' => '2200 watt',
                'wide' => '50 x 60 / 75 / 96 / 120 m2',
                'price' => 'Start from <b>Rp650.000.000</b>',
                'url' => $baseURL . 'arjuna',
            ],
            [
                'title' => 'Ruko Hunian 2 Lantai',
                'thumbnail' => 'wr-ruko-hunian.png',
                'delay' => '1000',
                'bath' => 'x1',
                'bed' => 'x1',
                'electricity' => '2200 watt',
                'wide' => '63 x 60 m2',
                'price' => 'Start from <b>Rp950.000.000</b>',
                'url' => $baseURL . 'ruko-hunian',
            ],
        ];

        return $data;
    }
}