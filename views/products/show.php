<?php require_once 'views/layout/includes/header.php'; ?>
<section id="show-phone" class="" style="font-family:Roboto">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="flexslider mt-4 mb-2">
                    <ul class="slides">
                        <?php while($image = $images->fetch_object()):?>
                            <li data-thumb="<?=APP_URL?>uploads/<?=$image->path?>">
                                <img src="<?=APP_URL?>uploads/<?=$image->path?>" class="img-slide">
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
                <p class="fs-6 my-0"><?=$product->description?></p>
                <div class="mt-2">
                    <table class="table table-bordered" style="font-size:16px;font-family:'Open Sans'">
                        <tr class="text-light fs-5" style="background-color:#a8a8a8;">
                            <td colspan="2" class="text-center">Detalles del dispositivo</td>
                        </tr>
                        <tr>
                            <td>Pantalla</td>
                            <td class="text-muted"><?=$product->screen?></td>
                        </tr>
                        <tr>
                            <td>Procesador</td>
                            <td class="text-muted"><?=$product->processor?></td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td class="text-muted"><?=$product->ram?></td>
                        </tr>
                        <tr>
                            <td>Almacenamiento</td>
                            <td class="text-muted"><?=$product->storage?></td>
                        </tr>
                        <tr>
                            <td>Expansión</td>
                            <td class="text-muted"><?=$product->expansion?></td>
                        </tr>
                        <tr>
                            <td>Cámara</td>
                            <td class="text-muted"><?=$product->camera?></td>
                        </tr>
                        <tr>
                            <td>Bateria</td>
                            <td class="text-muted"><?=$product->battery?></td>
                        </tr>
                        <tr>
                            <td>Sistema Operativo</td>
                            <td class="text-muted"><?=$product->os?></td>
                        </tr>
                        <tr>
                            <td>Perfil</td>
                            <td class="text-muted"><?=$product->profile?></td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td class="text-muted"><?=$product->weight?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col p-4">
                <h1 class="fs-4"><?=$product->name?></h1>
                <div class="px-3 py-2 rounded shadow d-flex align-items-center gap-3" style="max-width:max-content;">
                    <div>
                        <?php if($product->stock>0):?>
                            <p class="my-0 fs-2 fw-bold text-success">¡Disponible ahora!</p>
                        <?php else:?>
                            <p class="my-0 fs-2 fw-bold text-danger">¡No está disponible!</p>
                        <?php endif;?>
                        <div class="d-flex gap-5 justify-content-between">
                            <span class="fs-5"><?=$product->brand?></span>
                            <span class="fs-5 fw-bold text-primary"><i class="fab fa-shopify"></i> <?=$product->sale_price?> $</span>
                        </div>
                    </div>
                    <img src="<?=APP_URL?>assets/img/phone-animate.png" width="70" height="70" class="rounded-circle" alt="">
                </div>
                <div class="justify-content-between shadow mt-4 rounded py-1 pb-3 px-3 position-relative" style="max-width:max-content">
                    <img src="<?=APP_URL?>assets/img/navidad.png" width="130px" height="130px" class="position-absolute" alt="" style="z-index:0;top:-65px;right:-50px;">
                    <p class="my-0 mb-2 mt-3" style="font-size:16px;"><i class="text-muted fas fa-map-marker-alt"></i> Envios a toda Bolivia</p>
                    <p class="my-0 mb-2" style="font-size:16px;"><i class="text-muted fas fa-lock"></i> Transacción segura</p>
                    <p class="my-0 mb-2" style="font-size:16px;"><i class="text-muted fab fa-amazon-pay"></i> Accesorios de la mejor calidad</p>
                    <div class="d-flex gap-1">
                        <button class="btn btn-dark text-light fs-6" style="width:400px">Añadir a carrito</button>
                        <i class="d-flex justify-content-center align-items-center rounded fs-5 border border-dark fas fa-share" style="width: 45px;height:45px;"></i>
                    </div>
                    <button class="btn btn-warning w-100 text-light mt-2 py-2 fs-6">Comprar ahora</button>
                </div>
                <hr>
                <div>
                    <h4>También podría interesarte</h4>
                    <?php while($product = $similar->fetch_object()):?>
                        <div class="w-100 d-flex mb-4" style="font-family:'Open Sans';max-height:165px;">
                        <?php $images = Utils::getImages($product->id);?>
                            <div class="swiper ms-0" style="width:150px;min-width:150px;height:auto;">
                                <div class="swiper-wrapper">
                                    <?php while($image = $images->fetch_object()):?>
                                    <div class="swiper-slide">
                                        <img src="<?=APP_URL?>assets/img/<?=$image->path?>" width="100%" height="180" style="object-fit:cover" alt="">
                                    </div>
                                    <?php endwhile;?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="p-2 shadow">
                                <a href="<?=APP_URL?>product/show&id=<?=$product->id?>" class="text-decoration-none text-dark">
                                    <h6 class="text-muted d-flex align-items-center" style="height:35px"><?=$product->name?></h6>
                                    <p class="my-0 text-truncated fs-small"><?=$product->description?></p>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div>
                                            <p class="my-0 text-primary">Marca: <?=$product->brand?></p>
                                            <p class="my-0 text-primary">Gama: <?=$product->range?></p>
                                        </div>
                                        <span class="fs-4 text-success fw-bold"><?=$product->sale_price?> $</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
</script>
<script type="module">
    var swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 5,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay:4000,
        }
    });
</script>

<?php require_once 'views/layout/includes/footer.php'; ?>