<?php namespace App\Models;

class Connector
{
    public $wp;

    public function __construct()
    {
        $this->wp = db_connect('wp');
    }
}