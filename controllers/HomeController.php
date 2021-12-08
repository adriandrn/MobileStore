<?php
require_once 'models/Product.php';
require_once 'models/Brand.php';

use Dompdf\Dompdf;

class HomeController
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


    public function getByAjax()
    {
        $id = ($_GET['id']);
        $product = new Product();
        $products = $product->getAllByAjax($id);
        $cards = "";
        if ($products->num_rows > 0) {
            while ($product = $products->fetch_object()) {
                $cards .=
                    '<div class="col">
                        <div class="card mb-2">
                            <img src="' . APP_URL . 'assets/img/' . $product->path . '" alt="" height="180px" style="object-fit: cover;">
                            <div class="card-body">
                                <h3 style="overflow:hidden;
                                            text-overflow:ellipsis;
                                            display:-webkit-box;
                                            -webkit-box-orient:vertical;
                                            -webkit-line-clamp:2;">' . $product->name . '</h3>
                                <p style="overflow:hidden;
                                           text-overflow:ellipsis;
                                           display:-webkit-box;
                                           -webkit-box-orient:vertical;
                                           -webkit-line-clamp:3;
                                           ">' . $product->description . '</p>
                                <h5>' . $product->sale_price . ' $</h5>
                                <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
                            </div>
                            </div>
                        </div>
                    ';
            }

            echo $cards;
        } else {
            $cards .= '<div class="alert alert-danger">
                no hay productos
            </div>';

            echo $cards;
        }
    }

    public function downloadPDF()
    {
        // reference the Dompdf namespace


        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
