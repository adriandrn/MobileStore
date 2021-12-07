<?php 
require_once 'models/Product.php';
require_once 'models/Brand.php';

class HomeController{
    public function index(){
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
        include 'views/index.php';
    }
    
    
    public function getByAjax() {
        $id = ($_GET['id']);
        $product = new Product();
        $products = $product->getAllByAjax($id);
        /*while ($product = $products->fetch_object()) {
            
        echo '<pre>'.$product->name.'</pre>';
        }*/
        return json_encode($products) ;
    }

}
?>