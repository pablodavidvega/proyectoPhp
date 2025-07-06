<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashVendedor.css') ?>">
<?= $this->endSection() ?>

<main>
<a href="<?= base_url('/logout'); ?>" class="btn btn-logout">Cerrar sesion</a>

  <section id="Secmenu">
    <div class="menu-dashboard">
      <a href="javascript:history.back()" class="btn-back-page btn btn-secondary" style="display: inline-flex; align-items: center;">
        <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>

        Volver a la página anterior
      </a>
      <!-- Logo -->
      <div class="top-menu">
        <a href="<?= base_url('vendedor/dashboard') ?>">
          <div class="logo">
            <img src="<?= base_url('img/logo.jpg') ?>" alt="Logo" width="150">
            <span>MarketS</span>
          </div>
        </a>
      </div>

      <!-- Búsqueda -->
      <div class="input-search">
        <i class='bx bx-search'></i>
        <input type="text" class="input" placeholder="Buscar">
      </div>

      <!-- Menú del vendedor -->
      <div class="menu">
        <div class="enlace">
          <a onclick="cargarContenido('registrar_venta.html')">
            <i class='bx bx-dollar'></i>
            <span>Ventas de hoy</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('registrar')">
            <i class='bx bx-dollar'></i>
            <span>Registrar Venta</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('pedidos.html')">
            <i class='bx bx-cart'></i>
            <span>Pedidos Pendientes</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('productos.html')">
            <i class='bx bx-box'></i>
            <span>Stock</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-file'></i>
            <span>Ver productos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-package'></i>
            <span>Agregar producto</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class="bx bx-cart"></i>
            <span>Ver todos los pedidos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('configuracion.html')">
            <i class='bx bx-cog'></i>
            <span>Configuración</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="Seccontenido">
    <div id="contenido-principal">
      <!-- Aquí se carga el contenido dinámico -->
      <div>
        <h1>Vendedor@</h1>
      </div>

      <!-- Inicio Tarjetas resumen -->
      <div class="container mt-5">
        <h2 class="margin-bottom mb-4">Hola, <?= session('usuario') ?></h2>

        <!-- Resumen general -->
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body">
                <h5 class="card-title">Ventas de hoy</h5>
                <p class="card-text">$11.150.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
              <div class="card-body">
                <h5 class="card-title">Pedidos pendientes</h5>
                <p class="card-text">10 pedidos</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
              <div class="card-body">
                <h5 class="card-title">Stock</h5>
                <p class="card-text">2500 productos</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Accesos rápidos -->
        <div class="row">
          <div class="col-12">
            <h4 class="margin-bottom">Accesos rápidos</h4>
            <div class="btn-acces d-flex gap-3 flex-wrap">
              <a href="<?= base_url('vendedor/productos') ?>" class="btn-see-product btn btn-outline-primary">Ver productos</a>
              <a href="<?= base_url('vendedor/agregar') ?>" class="btn-add-product btn btn-outline-success">Agregar producto</a>
              <a href="<?= base_url('vendedor/pedidos') ?>" class="btn-see-order btn btn-outline-warning">Ver pedidos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Fin Tarjetas resumen -->
</main>

<?php echo $this->endSection(); ?>