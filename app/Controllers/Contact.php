<?php namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Contact Us - Wiratama Group',
        ];

        return view('contact/main', array_merge($this->commonData(), $data));
    }
}