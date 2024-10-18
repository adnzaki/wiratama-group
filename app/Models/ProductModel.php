<?php namespace App\Models;

class ProductModel extends \CodeIgniter\Model
{
    protected $table = 'tb_products';
    protected $allowedFields = ['id', 'product_name', 'description', 'hero1', 'hero2', 'featured_image', 'features'];
    protected $updatedField  = 'modified_at';
}