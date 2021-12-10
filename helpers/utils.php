<?php
require_once 'models/Product.php';
class Utils{
    public static function getImages($id){
        $product = new Product();
        $images = $product->getImages($id);
        return $images;
    }
    public static function deleteVars(){
        unset($_SESSION['register']);
        unset($_SESSION['register-error']);
        unset($_SESSION['data']);
        unset($_SESSION['register-success']);
        unset($_SESSION['login-error']);
        unset($_SESSION['login']);
    }
    public static function auth(){
        return isset($_SESSION['user']) ? $_SESSION['user'] : false;
    }
}
?>