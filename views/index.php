<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
              integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />

        <title>Document</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/user - grey.jpg" alt="" style="width: 50px" /></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav ms-auto g-0 gap-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Envios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Marcas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalogo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nosotros</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/banner_1.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner_2.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class=" carousel-item">
                    <img src="assets/img/banner_3.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section id="products" class="pt-4">
            <div class="container">
                <h1>Te invitamos a revizar algunos de nuestros productos</h1>
                <ul class="list-unstyled">

                    <?php while ($brand = $brands->fetch_object()): ?>
                                <!--<li class="btn btn-sm btn-secondary"><a class="text-decoration-none text-light" onclick="getByAjax(<?= $brand->id ?>)" href=""><?= $brand->name ?></a></li>-->
                        <li class="btn btn-sm btn-secondary" onclick="getByAjax(<?= $brand->id ?>)"><?= $brand->name ?></li>
                    <?php endwhile; ?>


                </ul>

                <div class="row row-cols-4">
                    <?php if ($products->num_rows > 0): ?>
                        <?php while ($product = $products->fetch_object()): ?> 

                            <div class="col">
                                <div class="card mb-2">
                                    <img  src="assets/img/<?= $product->path ?>" alt="" height="180px" style="object-fit: cover;">
                                    <div class="card-body">
                                        <h3 style="overflow:hidden;
                                            text-overflow:ellipsis;
                                            display:-webkit-box;
                                            -webkit-box-orient:vertical;
                                            -webkit-line-clamp:2;"><?= $product->name ?></h3>
                                        <p style="overflow:hidden;
                                           text-overflow:ellipsis;
                                           display:-webkit-box;
                                           -webkit-box-orient:vertical;
                                           -webkit-line-clamp:3;
                                           "><?= $product->description ?></p>
                                        <h5><?= $product->sale_price ?> $</h5>
                                        <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            no hay productos
                        </div>
                    <?php endif; ?>



                </div>
            </div>
        </section>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       
        -->

        <!--<script>
                            function getByAjax(brand_id) {
                                console.log(brand_id);
                                let xml = new XMLHttpRequest();
                                xml.onreadystatechange = function () {
                                    if (xml.readyState == 4 && xml.status == 200) {
                                        console.log(xml.responseText);
                                        //debugger;
                                    }
                                }
                                //console.log("http://localhost/MobileStore/home/getByAjax&id=" + brand_id);
                                //debugger;
                                xml.open("get", "http://localhost/MobileStore/home/getByAjax&id=" + brand_id, true);
                                xml.send();
                            }
        </script>-->
        <script>
                            function getByAjax(brand_id) {
                                $.ajax({
                                    url: "http://localhost/MobileStore/home/getByAjax&id=" + brand_id,
                                    type: "GET",
                                    success: function (data)
                                    {
                                        //alert("Success: " + response);
                                        console.log(data);
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        alert("Error");
                                    }
                                });
                            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





    </body>

</html>