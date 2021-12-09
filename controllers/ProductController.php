<?php
require_once 'models/Product.php';
require_once 'models/Brand.php';
require_once 'models/Range.php';
class ProductController{
    public function index(){
        $brand = new Brand();
        $brands = $brand->getAll();

        $range = new Range();
        $ranges = $range->getAll();

        $product = new Product();
        $years = $product->getAllYear();
        $products = $product->getByAjax(null,null,null);

        include 'views/products/index.php';
    }
    public function show(){
        $id = $_GET['id'];
        $product_instance = new Product();
        $product = $product_instance->getById($id);
        $images = $product_instance->getImages($id);
        $similar = $product_instance->getSimilar($product->brand_id,$product->id);

        include 'views/products/show.php';
    }
    public function getByAjax(){
        $brand = isset($_GET['brand_id']) ? $_GET['brand_id'] : null;
        $range = isset($_GET['range_id']) ? $_GET['range_id'] : null;
        $year = isset($_GET['year']) ? $_GET['year'] : null;
        $product = new Product();
        $products = $product->getByAjax($brand,$range,$year);
        $result = "";
        if ($products->num_rows>0) {
            while ($product = $products->fetch_object()) {
                $result .=
                    '<div class="col">
                        <div class="card mb-2">
                            <img src="'.APP_URL.'assets/img/'.$product->path.'" alt="" height="180px" style="object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fs-4" style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;">'.$product->name.'</h3>
                                <h5 class="fs-6"><span class="fw-bold">Marca:</span>'.$product->brand.'</h5>
                                <!-- <h5 class="fs-6"><span class="fw-bold">Año:</span> <?= $product->year ?></h5> -->
                                <h6 class="fs-6"><span class="fw-bold">Gama:</span>'.$product->range.'</h6>
                                <!-- <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:3;"><?= $product->description ?></p> -->
                                <h5>'.$product->sale_price.' $</h5>
                                <a class="btn btn-danger d-block mx-auto text-light fs-5" href="'.APP_URL.'product/show&id='.$product->id.'">Comprar ahora</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }else{
            $result.='<div class="alert alert-danger">
                        no hay productos
                    </div>';
        }
        echo $result;
    }
}
