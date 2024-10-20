<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\GalleryModel;

class SingleProduct extends BaseController
{
    private $productModel;

    private $galleryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->galleryModel = new GalleryModel();
    }
    
    public function index($permalink)
    {
        $commonData = $this->commonData();
        $field = '*, tb_products.id as product_id';
        $getProduct = $this->productModel
                           ->select($field)
                           ->join('tb_property', 'tb_products.property_id = tb_property.id')
                           ->where('permalink', $permalink)
                           ->first();

        // get other products
        $otherProducts = $this->productModel
                              ->select($field)
                              ->join('tb_property', 'tb_products.property_id = tb_property.id')
                              ->where('tb_products.id !=', $getProduct['product_id'])
                              ->findAll(5);

        // get image gallery
        $gallery = $this->galleryModel->where('product_id', $getProduct['product_id'])->findAll();
        $getProduct['gallery'] = $gallery;

        $propertyURL = $getProduct['property_url'];
        $tipe = $propertyURL === 'wiratama-residence-2' ? '' : 'tipe ';

        $contactMessage = "Saya berminat dengan rumah {$tipe}"  . $getProduct['product_name'] . '. Mohon informasi lebih lanjut.';

        $data = [
            'pageTitle'         => $getProduct['product_name'] . ' - ' . $getProduct['property_name'],
            'propertyURL'       => $getProduct['property_url'],
            'details'           => $getProduct,
            'otherProducts'     => $otherProducts,
            'baseImageURL'      => $commonData['img'] . 'all-images/products/',
            'contactMessage'    => $contactMessage
        ];

        return view('single-product/main', array_merge($commonData, $data));
    }

}