<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashVendedor.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashAdmin.css') ?>">

<?= $this->endSection() ?>

<main>
<a href="<?= base_url('/logout'); ?>" class="btn btn-logout">Cerrar sesion</a>

  <section id="Secmenu">
    <div class="menu-dashboard">
      <a href="javascript:history.back()" class="btn-back-page btn btn-secondary" style="display: inline-flex; align-items: center;">
        <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>

        Volver a la página anterioree
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
          <a onclick="cargarContenido('/empleados/listado')">
          <i class='bx bx-user'></i>
          <span>Lista de Empleados</span>
          </a>
        </div>
        
        <div class="enlace">
          <a onclick="cargarContenido('registrar_venta.html')">
            <i class='bx bx-dollar'></i>
            <span>Gestión de usuarios</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('registrar')">
            <i class='bx bx-dollar'></i>
            <span> Gestión de productos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('pedidos.html')">
            <i class='bx bx-cart'></i>
            <span>Pedidos y ventas</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('productos.html')">
            <i class='bx bx-box'></i>
            <span>Métodos de pago</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-file'></i>
            <span>Envíos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-package'></i>
            <span>Configuración</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class="bx bx-cart"></i>
            <span>Exportar a Excel</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="Seccontenido">
  <div id="contenido-principal">
    <!-- Encabezado -->
    <div>
      <h1>Administrador</h1>
    </div>

    <!-- Resumen -->
    <div class="container mt-5">
      <h2 class="margin-bottom mb-4">Bienvenido, <?= session('usuario') ?></h2>

      <!-- Tarjetas resumen -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Gestión de usuarios</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-danger mb-3">
            <div class="card-body">
              <h5 class="card-title">Gestión de productos</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title"> Pedidos y ventas</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Accesos rápidos -->
      <div class="row">
        <div class="col-12">
          <h4 class="margin-bottom">Accesos rápidos</h4>
          <div class="btn-acces d-flex gap-3 flex-wrap">
            <a href="javascript:void(0);" onclick="cargarContenido('/empleados/index')" class="btn-see-users btn btn-outline-primary"> Métodos de pago</a>
            <a href="javascript:void(0);" onclick="cargarContenido('/reportes/general')" class="btn-reports btn btn-outline-secondary">Envíos</a>
            <a href="javascript:void(0);" onclick="cargarContenido('/configuracion')" class="btn-config btn btn-outline-dark">Configuración</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!--Fin Tarjetas resumen -->
</main>

<?php echo $this->endSection(); ?>