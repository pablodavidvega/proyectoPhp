<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">
<?= $this->endSection() ?>

<main>
    <a href="<?= base_url('/logout'); ?>" class="btn btn-logout">Cerrar sesion</a>

<section id="Secmenu"> <!--para separar la parte del menu con la parte blanca-->

<div class="menu-dashboard">
        <a href="javascript:history.back()" class="btn-back-page btn btn-secondary" style="display: inline-flex; align-items: center;">
            <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>
            Volver a la página anterior
        </a>
        <!--TOP MENU-->
        <div class="top-menu">
            <a href="<?= base_url('/clientes')?>">
                <div class="logo">
                    <img src="<?= base_url('img/logo.jpg') ?>" alt="Logo" width="150">
                    <span>MarketS</span>
                </div>
            </a>
        </div>
        <!--Busqueda-->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!--MENU-->
    <div class="menu">
        <div class="enlace">
            <a onclick="cargarContenido('dashUsuarios.html')">
            <i class='bx bx-user'></i>
            <span>Mis pedidos</span>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('analitics.html')">
                <i class='bx bxs-grid-alt'></i>
                <span>Domicilios</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('mensajes.html')">
                <i class='bx bx-message-square'></i>
                <span>Datos personales</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('ARCHIVOS.html')">
                <i class='bx bx-file-blank'></i>
                <span>Métodos de pago</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('pedidos.html')">
                <i class='bx bx-cart'></i>
                <span>Favoritos</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('505sant.html')">
                <i class='bx bx-cog'></i>
                <span>Notificaciones</span>
            </a>
            </a>
        </div>
    </div>
</div>
</section>

<section id="Seccontenido">
  <div id="contenido-principal">
    <!-- Bienvenida -->
    <div>
      <h1>usuari@</h1>
    </div>

    <!-- Inicio Tarjetas resumen -->
    <div class="container mt-5">
      <h2 class="margin-bottom mb-4">Hola, <?= session('usuario') ?></h2>

      <!-- Resumen general -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Pedidos realizados</h5>
              <p class="card-text">12 pedidos</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title">Pedidos en camino</h5>
              <p class="card-text">2 entregas activas</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Total</h5>
              <p class="card-text">$3.450.000


</main>

<?php echo $this->endSection();?>
