<?php
require_once 'models/Brand.php';
require_once 'models/Range.php';
require_once 'models/Product.php';

class CatalogController
{
  public function index()
  {
    $brand = new Brand();
    $brands = $brand->getAll();

    $range = new Range();
    $ranges = $range->getAll();

    $year = new Product();
    $years = $year->getAllYear();

    $product = new Product();
    $products = $product->getAllNotLimit();

    include 'views/catalog.php';
  }

  public function getByBrand()
  {
    $brand = ($_GET['id']);
    $product = new Product();
    $products = $product->getAllByAjax($brand);
    $cards = "";
    if ($products->num_rows > 0) {
      while ($product = $products->fetch_object()) {
        $cards .=
          '<div class="col">
            <div class="card mb-2">
              <img src="' . APP_URL . 'assets/img/' . $product->path . '" alt="" height="180px" style="object-fit: cover;">
                <div class="card-body">
                  <h3 style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;">' . $product->name . '</h3>
                  <h5>Año:'.$product->year.'</h5>
                  <h5>Gama:'.$product->range_id.'</h5>
                  <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical;-webkit-line-clamp:3;">' . $product->description . '</p>
                  <h5>' . $product->sale_price . ' $</h5>
                  <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
                </div>
            </div>
          </div>';
      }
      echo $cards;
    } else {
      $cards .= '<div class="alert alert-danger">no hay productos</div>';
      echo $cards;
    }
  }

  public function getByRange()
  {
    $range_id = ($_GET['id']);
    $product = new Product();
    $products = $product->getByRange($range_id);
    $cards = "";
    if ($products->num_rows > 0) {
      while ($product = $products->fetch_object()) {
        $cards .=
          '<div class="col">
              <div class="card mb-2">
                <img src="' . APP_URL . 'assets/img/' . $product->path . '" alt="" height="180px" style="object-fit: cover;">
                  <div class="card-body">
                    <h3 style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;">' . $product->name . '</h3>
                      <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical;-webkit-line-clamp:3;">' . $product->description . '</p>
                    <h5>' . $product->sale_price . ' $</h5>
                    <h6>Gama:'.$product->range_id.'</h6>
                    <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
                  </div>
                </div>
              </div>';
      }
      echo $cards;
    } else {
      $cards .= '<div class="alert alert-danger">no hay productos</div>';
      echo $cards;
    }
  }

  // public function getByYear()
  // {
  //   $year_id = ($_GET['branch_id']);
  //   $product = new Product();
  //   $products = $product->getByYear($year_id);
  //   $cards = "";
  //   if ($products->num_rows > 0) {
  //     while ($product = $products->fetch_object()) {
  //       $cards .=
  //         '<div class="col">
  //             <div class="card mb-2">
  //               <img src="' . APP_URL . 'assets/img/' . $product->path . '" alt="" height="180px" style="object-fit: cover;">
  //                 <div class="card-body">
  //                   <h3 style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;">' . $product->name . '</h3>
  //                     <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical;-webkit-line-clamp:3;">' . $product->description . '</p>
  //                   <h5>' . $product->sale_price . ' $</h5>
  //                   <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
  //                 </div>
  //               </div>
  //             </div>';
  //     }
  //     echo $cards;
  //   } else {
  //     $cards .= '<div class="alert alert-danger">no hay productos</div>';
  //     echo $cards;
  //   }
  // }
}
