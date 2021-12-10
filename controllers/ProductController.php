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
                            <img src="'.APP_URL.'assets/img/'.$product->path.'" alt="" height="140px" style="object-fit: cover;">
                            <div class="card-body p-2">
                                <h3 class="fs-5 my-0" style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;">'.$product->name.'</h3>
                                <p class="fs-6 my-0"><span class="text-muted"><i class="fas fa-tags"></i> Marca:</span>'.$product->brand.'</p>
                                <p class="fs-6 my-0"><span class="text-muted"><i class="fab fa-weibo"></i> Gama:</span>'.$product->range.'</p>
                                <p class="text-success fs-5 fw-bold my-0 mb-2">'.$product->sale_price.' $</p>
                                <a class="btn btn-outline-dark d-block mx-auto fs-5" href="'.APP_URL.'product/show&id='.$product->id.'" style="max-width:max-content">
                                    Ver Producto
                                </a>
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
