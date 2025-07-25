<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>


<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('css/cliente.css') ?>">
<?= $this->endSection() ?>

<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Ayuda</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Soporte</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <img class="img-fluid" src="<?= base_url('img/logo.jpg') ?>" alt="">

                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Market</span>S
                </h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar productos">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge">0</span>
            </a>
            <a href="<?= base_url('/carrito'); ?>" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <a href="#" class="nav-link" data-toggle="dropdown">vestidos</a>
                    <a href="" class="nav-item nav-link">Camisas</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Trajes de baño</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Ropa deportiva</a>
                    <a href="" class="nav-item nav-link">Chaquetas</a>
                    <a href="" class="nav-item nav-link">Zapatos</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?= base_url('/productos') ?>" class="nav-item nav-link">Productos</a>
                        <a href="<?= base_url('/carrito') ?>" class="nav-item nav-link">Carro de Compras</a>
                        <a href="<?= base_url('/checkout'); ?>" class="nav-item nav-link">Confirmar pedido</a>
                        <a href="<?= base_url('/contact'); ?>" class="nav-item nav-link">Contacto</a>
                        <a href="<?= base_url('/dash'); ?>" class="nav-item nav-link">Mi cuenta</a>
                        <a href="<?= base_url('/logout'); ?>" class="btn btn-danger btn-logout">Cerrar sesion</a>
                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class=" img-fluid" src="<?= base_url('img/banner1.jpg') ?>" alt="">

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de descuento en tu primera compra</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Vestido de moda</h3>
                                <a href="" class="btn btn-light py-2 px-3">Compra ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-prod img-fluid" src="<?= base_url('img/banner2.jpg') ?>" alt="">

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de descuento en tu primera compra</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Precio razonable</h3>
                                <a href="" class="btn btn-light py-2 px-3">Compra ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Producto de calidad</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Envío gratis</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Devolución en 14 días</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Soporte 24/7</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">

        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">25 Productos</p>
                <a href="detail.html" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-prod img-fluid" src="<?= base_url('img/descuento1girl.png') ?>" alt="">

                </a>
                <h5 class="font-weight-semi-bold m-0">Vestidos de mujer</h5>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 Productos</p>
                <a href="detail.html" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-prod img-fluid" src="<?= base_url('img/descuento2girl.png') ?>" alt="">

                </a>
                <h5 class="font-weight-semi-bold m-0">Accerssorios</h5>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">150 Productos</p>
                <a href="detail.html" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-prod img-fluid" src="<?= base_url('img/girl2.jpg') ?>" alt="">

                </a>
                <h5 class="font-weight-semi-bold m-0">Zapatos</h5>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->

<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img class="img-prod img-fluid" src="<?= base_url('img/girl3.jpg') ?>" alt="">

                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% DE DESCUENTO EN TODOS LOS PEDIDOS</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Ropa Deportiva</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Compra ahora</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img class="img-prod img-fluid" src="<?= base_url('img/girl4.jpg') ?>" alt="">

                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% DE DESCUENTO EN TODOS LOS PEDIDOS</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Accesorios deportivos</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Compra ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Productos más comprados </span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/kid1.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.0000</h6>
                        <h6 class="text-muted ml-2"><del>$123.0000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/kid2.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/men1.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/men3.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/shoes.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class=" img-prod img-fluid" src="<?= base_url('img/women1.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/bag1.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-prod img-fluid" src="<?= base_url('img/banner1.jpg') ?>" alt="">

                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Camisa colorida y elegante</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.000</h6>
                        <h6 class="text-muted ml-2"><del>$123.000</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="<?= base_url('/detail'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detalle</a>
                    <a href="<?= base_url('/carrito'); ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Manténte actualizado</span></h2>
                <p>Sé el primero en conocer nuestras ofertas, lanzamientos y productos exclusivos.</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Suscribete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">Market</span>S</h1>
            </a>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>transversal 68f # 44-63 Bogotá Colombia</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>MarketS@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+57 3102140519</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Información</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark" href=""><i class="fa fa-angle-right mr-2"></i>categorías</a>
                        <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Términos y condiciones</a>
                        <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Políticas de privacidad</a>
                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Políticas de envíos y devoluciones</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Preguntas frecuentes (FAQ)</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Chat o formulario de contacto</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>“© 2025 MarketSneakers Todos los derechos reservados.”</a>

                    </div>
                </div>

                <div class="col-md-6 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Tu nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Tu correo electrónico"
                                required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Suscríbete ahora</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<?php echo $this->endSection(); ?>