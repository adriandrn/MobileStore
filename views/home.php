<?php include('views/layout/includes/header.php'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= APP_URL ?>assets/img/banner/banner_1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="<?= APP_URL ?>assets/img/banner/banner_2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class=" carousel-item">
            <img src="<?= APP_URL ?>assets/img/banner/banner_3.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="products" class="pt-4" style="font-family:'Open Sans'">
    <div class="container">
        <h1>Te invitamos a revizar algunos de nuestros productos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, reiciendis quisquam dolor neque nesciunt a? Ut expedita quae aliquid esse aspernatur fuga odio excepturi, labore animi similique recusandae? Sed saepe voluptates ipsam commodi. Recusandae dignissimos voluptatem saepe at cupiditate maiores doloremque magnam sit itaque ducimus, accusamus culpa aut quas incidunt!</p>
        <ul class="list-unstyled" style="border-bottom:1px solid #ccc;max-width:max-content;">
            <?php while ($brand = $brands->fetch_object()) : ?>
                <li class="btn fs-6" <?=$brand->id==1 ? 'style="border-bottom:2px solid #605b5b;color:#605b5b !important;font-weight:bold;"' : ''?> onclick="getByAjax(<?= $brand->id ?>)"><?= $brand->name ?></li>
            <?php endwhile; ?>
        </ul>
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5" id="cards-container">
            <?php if ($products->num_rows > 0) : ?>
                <?php while ($product = $products->fetch_object()) : ?>
                    <div class="col">
                    <div class="card mb-2">
                        <img src="<?=APP_URL?>assets/img/<?= $product->path?>" alt="" height="140px" style="object-fit: cover;">
                        <div class="card-body p-2">
                            <h3 class="fs-5 my-0" style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;"><?= $product->name ?></h3>
                            <p class="fs-6 my-0"><span class="text-muted"><i class="fas fa-tags"></i> Marca:</span> <?= $product->brand ?></p>
                            <p class="fs-6 my-0"><span class="text-muted"><i class="fab fa-weibo"></i> Gama:</span> <?= $product->range ?></p>
                            <p class="text-success fs-5 fw-bold my-0 mb-2"><?=$product->sale_price?> $</p>
                            <a class="btn btn-outline-dark d-block mx-auto fs-5" href="<?=APP_URL?>product/show&id=<?=$product->id?>" style="max-width:max-content">
                                Ver Producto
                            </a>
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
    </div>
</section>

<section>
    <div class="container">
        <hr>
        <h2>Sobre Nosotros</h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Mision</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti at debitis libero officia ipsum deserunt earum delectus? Repudiandae recusandae veniam obcaecati. Natus aspernatur exercitationem autem facilis perspiciatis. Quasi, qui molestiae.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <h3>Vision</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quidem officia, numquam laboriosam fuga quibusdam expedita vero explicabo, commodi deleniti a, earum voluptatem nemo veritatis sunt asperiores cupiditate porro saepe!
                </p>
            </div>

            <div class="col-12">
                <h3>Objetivos</h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, doloribus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, animi!</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vitae provident nisi aspernatur labore tempora, exercitationem obcaecati nulla totam ea?</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, doloribus. Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae iusto consequatur deserunt libero praesentium. Quo facilis quas exercitationem nulla ullam velit veritatis sunt eaque laborum, neque ipsum fugit facere aperiam.</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<script>
    function getByAjax(brand_id) {
        $.ajax({
            url: "<?=APP_URL?>product/getByAjax&brand_id="+brand_id,
            type: "GET",
            success: function(data) {
                //alert("Success: " + response);
                // console.log(data);
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