<?php require_once 'views/layout/includes/header.php'; ?>
<section id="show-phone" class="" style="font-family:Roboto">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="flexslider mt-4">
                    <ul class="slides">
                        <?php while($image = $images->fetch_object()):?>
                            <li data-thumb="<?=APP_URL?>uploads/<?=$image->path?>">
                                <img src="<?=APP_URL?>uploads/<?=$image->path?>" class="img-slide">
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
                
            </div>
            <div class="col p-4">
                <h1 class="fs-3 fw-bold"><?=$product->name?></h1>
                <div class="px-3 py-2 rounded shadow d-flex align-items-center gap-3" style="max-width:max-content;">
                    <div>
                        <p class="my-0 fs-2 fw-bold text-success">¡Disponible ahora!</p>
                        <div class="d-flex gap-5 justify-content-between">
                            <span class="fs-4"><?=$product->brand?></span>
                            <span class="fs-4 fw-bold text-primary"><i class="fab fa-shopify"></i> <?=$product->sale_price?> $</span>
                        </div>
                    </div>
                    <img src="<?=APP_URL?>assets/img/phone-animate.png" width="70" height="70" class="rounded-circle" alt="">
                </div>
                <div class="justify-content-between shadow mt-4 rounded py-1 pb-3 px-3 position-relative" style="max-width:max-content">
                    <img src="<?=APP_URL?>assets/img/navidad.png" width="130px" height="130px" class="position-absolute" alt="" style="z-index:0;top:-65px;right:-50px;">
                    <p class="my-0 mb-2 mt-3" style="font-size:18px;"><i class="text-muted fas fa-map-marker-alt"></i> Envios a toda Bolivia</p>
                    <p class="my-0 mb-2" style="font-size:18px;"><i class="text-muted fas fa-lock"></i> Transacción segura</p>
                    <p class="my-0 mb-2" style="font-size:18px;"><i class="text-muted fab fa-amazon-pay"></i> Accesorios de la mejor calidad</p>
                    <div class="d-flex gap-1">
                        <button class="btn btn-dark text-light fs-5" style="width:400px">Añadir a carrito</button>
                        <i class="d-flex justify-content-center align-items-center rounded fs-5 border border-dark fas fa-share" style="width: 50px;height:50px;"></i>
                    </div>
                    <button class="btn btn-warning w-100 text-light mt-2 py-2 fs-5">Comprar ahora</button>
                </div>
                <div class="mt-4">
                    <p><?=$product->description?></p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center">Detalles del dispositivo</td>
                        </tr>
                        <tr>
                            <td>Pantalla</td>
                            <td><?=$product->screen?></td>
                        </tr>
                        <tr>
                            <td>Procesador</td>
                            <td><?=$product->processor?></td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td><?=$product->ram?></td>
                        </tr>
                        <tr>
                            <td>Almacenamiento</td>
                            <td><?=$product->storage?></td>
                        </tr>
                        <tr>
                            <td>Expansión</td>
                            <td><?=$product->expansion?></td>
                        </tr>
                        <tr>
                            <td>Cámara</td>
                            <td><?=$product->camera?></td>
                        </tr>
                        <tr>
                            <td>Bateria</td>
                            <td><?=$product->battery?></td>
                        </tr>
                        <tr>
                            <td>Sistema Operativo</td>
                            <td><?=$product->os?></td>
                        </tr>
                        <tr>
                            <td>Perfil</td>
                            <td><?=$product->profile?></td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td><?=$product->weight?></td>
                        </tr>
                    </table>
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

<?php require_once 'views/layout/includes/footer.php'; ?>