<?php namespace App\Models;

class SiteModel extends Connector
{
    private $wpOptions;

    public function __construct()
    {
        parent::__construct();
        $this->wpOptions = $this->wp->table('wp_options');
    }
    
    public function getBlogUrl()
    {
        $query = $this->wpOptions->getWhere(['option_name' => 'siteurl']);

        return $query->getResult()[0]->option_value;
    }
}