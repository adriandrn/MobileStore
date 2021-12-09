<?php
require_once 'models/Product.php';
class Utils{
    public static function getImages($id){
        $product = new Product();
        $images = $product->getImages($id);
        return $images;
    }
}
?>