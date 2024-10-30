<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['url', 'cookie', 'wiratama'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function commonData()
    {
        $data = [
            'siteName'          => 'Wiratama Group',
            'headerTitle'       => 'Wiratama',
            'contactNumber'     => '+62 813-8886-8880',
            'contactWhatsapp'   => '6281388868880',
            'contactLink'       => 'https://wa.me/6281388868880',
            'email'             => 'marketing@wiratama-group.com',
            'location'          => 'Jl. Kantor Kel. Lubang Buaya, Kec. Setu, Kab. Bekasi',
            'mapLocation'       => 'https://maps.app.goo.gl/KTfq6rbjJkSgYpsS8',
            'logo'              => 'logo-wiratama.webp',
            'facebookPage'      => 'https://www.facebook.com/profile.php?id=100092417575690',
            'youtubeChannel'    => 'https://www.youtube.com/@WiratamaGroup',
            'instagramProfile'  => 'https://www.instagram.com/wiratamagroupofficial/',
            'tiktokLink'        => 'https://www.tiktok.com/@wiratamaestate3?_t=8qSUpxecz9r&_r=1',
            'css'               => base_url('assets/css/'),
            'js'                => base_url('assets/js/'),
            'img'               => base_url('assets/img/'),
        ];

        return $data;
    }
}
