<?php
require_once 'models/Product.php';
require_once 'models/Brand.php';

use Dompdf\Dompdf;

class ProductController
{
    public function index()
    {
        $product = new Product();
        $products = $product->getAll();

        $brand = new Brand();
        $brands = $brand->getAll();
        //$user = new Usuario();
        //$users = $user->getAll();
        // var_dump($users);
        /*while($product = $products->fetch_object()){
            echo "".$product->name."<br>";
        }*/
        include 'views/home.php';
    }

    public function show()
    {
        $id = $_GET['id'];
        $product = new Product();
        $product = $product->getById($id);
        include 'views/products/show.php';
    }
}
