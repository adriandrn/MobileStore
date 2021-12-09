<?php include('views/layout/includes/header.php'); ?>

<div class="container-fluid mt-5" style="background-color: whitesmoke;">
    <div class="d-flex justify-content-center">
        <h1>Lorem, ipsum dolor.</h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <img src="../assets/img/cell_1.jpg" alt="imagen" class="w-100">
        </div>
        <div class="col-12 col-sm-6">
            <p class="">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, asperiores debitis ullam tempore voluptatibus perferendis deserunt architecto laborum corrupti enim ipsam doloribus dolor dicta animi quod accusantium voluptatem eos porro! Iste dicta obcaecati ipsam eveniet, vel laborum quas quos. Sunt optio similique magni delectus aspernatur, officiis ipsum in facere aperiam consequuntur doloremque nulla, inventore ad id error, quam omnis dolor!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui natus, magni iure odio hic vel accusantium consequuntur, assumenda doloremque expedita rerum! Natus velit aspernatur eaque, dolor sunt maiores sed recusandae commodi rerum laboriosam nisi blanditiis nam illo quisquam tempore voluptatem omnis aliquid deleniti neque, corrupti, quibusdam facere ipsum adipisci? Doloribus?
            </p>
        </div>
    </div>
</div>
<section class="container-fluid mt-4" style="font-family:'Open Sans'" id="product-filters">
    <h3 class="mx-5">Productos para satisfacer tus exigencias</h3>
    <p class="mx-5 my-0 mb-2">Busca entre nuestros productos el que más te guste y agrade para adquirirlo a los precios mas comodos.</p>
    <div class="d-flex mx-5 mb-4 gap-2">
        <button style="background-color:transparent;" onclick="getByAjax(null,null,null)" class="py-2 px-3 btn-outline-dark text-dark btn-active">Todos</button>
        <div class="dropdown" style="cursor:pointer;">
            <button style="background-color:transparent;" class="py-2 px-3 btn-outline-dark dropdown-toggle text-dark btn-active" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Marca
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php while ($brand = $brands->fetch_object()):?>
                    <li class="dropdown-item" onclick="getByAjax(<?=$brand->id?>,null,null)"><?=$brand->name?></li>
                <?php endwhile;?>
            </ul>
        </div>
        <div class="dropdown" style="cursor:pointer;">
            <button style="background-color:transparent;" class="py-2 px-3 btn-outline-dark dropdown-toggle text-dark btn-active" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Gama
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php while ($range = $ranges->fetch_object()) :                ?>
                    <li class="dropdown-item" onclick="getByAjax(null,<?=$range->id?>,null)"><?=$range->gama?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="dropdown" style="cursor:pointer;">
            <button style="background-color:transparent;" class="py-2 px-3 btn-outline-dark dropdown-toggle text-dark btn-active" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Año
            </button>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                <?php while ($year = $years->fetch_object()) :                ?>
                    <li class="dropdown-item" onclick="getByAjax(null,null,<?=$year->year?>)"><?=$year->year?></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 mx-5" id="cards-container">
        <?php if ($products->num_rows > 0) : ?>
            <?php while ($product = $products->fetch_object()) : ?>
                <div class="col">
                    <div class="card mb-2">
                        <img src="<?=APP_URL?>assets/img/<?= $product->path?>" alt="" height="180px" style="object-fit: cover;">
                        <div class="card-body">
                            <h3 class="fs-4" style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;"><?= $product->name ?></h3>
                            <h5 class="fs-6"><span class="fw-bold">Marca:</span> <?= $product->brand ?></h5>
                            <!-- <h5 class="fs-6"><span class="fw-bold">Año:</span> <?= $product->year ?></h5> -->
                            <h6 class="fs-6"><span class="fw-bold">Gama:</span> <?= $product->range ?></h6>
                            <!-- <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:3;"><?= $product->description ?></p> -->
                            <h5><?= $product->sale_price ?> $</h5>
                            <a class="btn btn-danger d-block mx-auto text-light fs-5" href="<?=APP_URL?>product/show&id=<?=$product->id?>">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="alert alert-danger">
                no hay productos
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="brands" class="mt-3" style="font-family: 'Open Sans';">
    <div class="container">
        <h3 class="fs-2 fw-bold">Nuestras marcas estrella</h3>
        <p class="fs-5 my-0 mb-4">Nuestros productos tienen la garantía de las mejores marcas en la industria de dispositivos moviles</p>
        <div class="swiper w-100" style="height:max-content;">
            <div class="swiper-wrapper">
                <div class="swiper-slide mb-4">
                    <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/samsung.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Samsung</h4>
                        <p class="my-0">Diseñamos productos y creamos funcionalidades para ti, para ayudarte en tu vida diaria.</p>
                        <a href="https://www.samsung.com" class="text-decoration-none">www.samsung.com</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/huawei.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Huawei</h4>
                        <p class="my-0">Juntos innovamos, crecemos y ganamos, acompañamos en este proceso.</p>
                        <a href="https://consumer.huawei.com" class="text-decoration-none">consumer.huawei.com</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/iphone.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Apple</h4>
                        <p class="my-0">Privacidad. Eso es Apple para ti y todas las personas.</p>
                        <a href="https://www.apple.com" class="text-decoration-none">www.apple.com</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/motorola.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Motorola</h4>
                        <p class="my-0">Pensamos en ti y tus necesidades, acompañamos en nuestro camino.</p>
                        <a href="https://www.motorola.cl" class="text-decoration-none">www.motorola.cl</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/nokia.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Nokia</h4>
                        <p class="my-0">Conectando personas. No pensamos en lo que pudo ser sino en lo que será.</p>
                        <a href="https://www.nokia.com" class="text-decoration-none">www.nokia.com</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/sony.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Sony</h4>
                        <p class="my-0">Sony es una familia, los usuarios y trabajadores hacen parte de ella.</p>
                        <a href="https://www.sony.com.bo" class="text-decoration-none">www.sony.com.bo</a>
                    </div>
                </div>
                <div class="swiper-slide">
                <img class="rounded-circle d-block mx-auto" src="<?=APP_URL?>assets/img/alcatel.jpg" style="max-width:90%;min-width:220px;" width="220px" height="220px" height="auto" style="object-fit:cover;" alt="">
                    <div class="text-center pt-2">
                        <h4 class="fw-bold">Alcatel</h4>
                        <p class="my-0">Aprende y disfruta de cada momento que te regala la vida. Solo tienes una oportunidad.</p>
                        <a href="https://www.alcatelmobile.com" class="text-decoration-none">www.alcatelmobile.com</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>            
    </div>
</section>

<script src="<?=APP_URL?>assets/js/app.js"></script>
<script>
    function getByAjax(brand_id,range_id,year) {
        let route = "<?=APP_URL?>product/getByAjax";
        if(brand_id!=null){
            route+="&brand_id="+brand_id;
        }
        if(range_id!=null){
            route+="&range_id="+range_id;
        }
        if(year!=null){
            route+="&year="+year;
        }
        $.ajax({
            url: route,
            type: "GET",
            success: function(data) {
                $("#cards-container").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Error");
            }
        });
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include('views/layout/includes/footer.php'); ?>