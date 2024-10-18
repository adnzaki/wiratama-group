<?php namespace App\Controllers;

use App\Models\ProductModel;

class SingleProduct extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    
    public function index($permalink)
    {
        $getProduct = $this->productModel
                        ->join('tb_property', 'tb_products.property_id = tb_property.id')
                        ->where('permalink', $permalink)
                        ->first();
        $data = [
            'pageTitle'     => $getProduct['product_name'] . ' - ' . $getProduct['property_name'],
            'propertyURL'   => $getProduct['property_url'],
            'details'       => $getProduct
        ];

        return view('single-product/main', array_merge($this->commonData(), $data));
    }

}