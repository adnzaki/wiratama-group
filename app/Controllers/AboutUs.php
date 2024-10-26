<?php namespace App\Controllers;

class AboutUs extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'About Us - Wiratama Group',
        ];
        return view('about-us/main', array_merge($this->commonData(), $data));
    }
}