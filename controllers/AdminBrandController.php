<?php
require_once 'models/Brand.php';

class AdminBrandController{
    public function index(){
        $brand = new Brand();
        $brands = $brand->getAll();
        include 'views/admin/brands/index.php';
    }
    public function create(){
        include 'views/admin/brands/create.php';
    }
    public function store(){

    }
    public function edit(){
        $brand_id = $_GET['id'];
        $brand = new Brand();
        // $brand = $brand->find($brand_id);
        include 'views/admin/brands/edit.php';
    }
    public function update(){

    }
    public function destroy(){
        $brand_id = $_GET['id'];
        $brand = new Brand();
        // $brand->delete($brand_id);
        // header('Location:'.APP_URL.'AdminBrand/index');
    }
}

?>