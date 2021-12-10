<?php
<<<<<<< HEAD

class AdminProductController
{
   public function index()
   {
      include 'views/admin/products/index.php';
   }

   public function create()
   {
      include 'views/admin/products/create.php';
   }

   public function edit()
   {
      include 'views/admin/products/edit.php';
   }

   public function delete()
   {
      
   }
}
=======
require_once 'models/Product.php';

class AdminProductController{
    public function index(){
        $product = new Product();
        $products = $product->getByAjax(null,null,null);
        include 'views/admin/products/index.php';
    }
    public function create(){
        include 'views/admin/products/create.php';
    }
    public function store(){

    }
    public function edit(){
        $product_id = $_GET['id'];
        $product = new Product();
        // $product = $product->find($product_id);
        include 'views/admin/products/edit.php';
    }
    public function update(){

    }
    public function destroy(){
        $product_id = $_GET['id'];
        $product = new Product();
        // $brand->delete($product_id);
        // header('Location:'.APP_URL.'AdminProduct/index');
    }
}

?>
>>>>>>> 38bd94732b6f97037bc4beeb4c8e7d36d9977647
