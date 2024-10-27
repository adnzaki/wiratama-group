<?php namespace App\Controllers;

class AboutUs extends BaseController
{
    public function index()
    {
        $galleryImages = [
            [
                'src'   => 'gallery-col-3',
                'size'  => 'col-lg-3',
                'text'  => 'Acara Grand Launching Wiratama Estate 3',
            ],
            [
                'src'   => 'gallery-col-5',
                'size'  => 'col-lg-5',
                'text'  => 'Kegiatan Family Gathering Dalam Rangka Hari Jadi Wiratama Group',
            ],
            [
                'src'   => 'gallery-col-4',
                'size'  => 'col-lg-4',
                'text'  => 'Acara Grand Launching Wiratama Estate 3',
            ],
        ];

        $data = [   
            'pageTitle'     => 'About Us - Wiratama Group',
            'profileText1'  => "WIRATAMA GROUP adalah hasil gabungan antara PT. Wira Pratama Nusantara dan PT. Griya Permata Sentosa.<br /><br />PT. WIRA PRATAMA NUSANTARA, didirikan oleh Toni Sachroni, bergerak di bidang properti perumahan. Dengan berbagai pilihan tipe dan ukuran lahan yang beragam, perusahaan ini memberikan keleluasaan bagi calon pembeli untuk memilih hunian yang sesuai dengan kebutuhan dan preferensi masing-masing.",
            'galleryImages' => $galleryImages
        ];

        return view('about-us/main', array_merge($this->commonData(), $data));
    }
}