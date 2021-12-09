<?php
require_once 'models/Product.php';
require_once 'models/Brand.php';
use Dompdf\Dompdf;

class HomeController{
    public function index(){
        $product = new Product();
        $products = $product->getByAjax(1,null,null);
        $brand = new Brand();
        $brands = $brand->getAll();
        include 'views/home.php';
    }
    public function downloadPDF(){
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
