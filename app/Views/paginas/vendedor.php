<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Vendedor - MarketS</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">
  <script src="<?= base_url('js/dash.js') ?>" defer></script>
</head>
<body>

<main>

<section id="Secmenu">
  <div class="menu-dashboard">

    <!-- Logo -->
    <div class="top-menu">
      <a href="<?= base_url('vendedor/dashboard') ?>">
        <div class="logo">
          <img src="<?= base_url('img/MS.jpg') ?>">
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
          <span>Registrar Venta</span>
        </a>
      </div>

      <div class="enlace">
        <a onclick="cargarContenido('productos.html')">
          <i class='bx bx-box'></i>
          <span>Stock</span>
        </a>
      </div>

      <div class="enlace">
        <a onclick="cargarContenido('pedidos.html')">
          <i class='bx bx-cart'></i>
          <span>Pedidos</span>
        </a>
      </div>

      <div class="enlace">
        <a onclick="cargarContenido('facturas.html')">
          <i class='bx bx-file'></i>
          <span>Facturas</span>
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
  <div>
    <h1>Bienvenido, Vendedor</h1>
  </div>

  <!-- Tarjetas resumen -->
  <div class="cards-container">
    <div class="card">
      <h3>Ventas del Día</h3>
      <p>$0</p>
    </div>
    <div class="card">
      <h3>Pedidos Pendientes</h3>
      <p>0</p>
    </div>
    <div class="card">
      <h3>Productos en Stock</h3>
      <p>0</p>
    </div>
  </div>
</section>

</main>

</body>
</html>

<a href="<?= base_url('/logout'); ?>" class="btn btn-danger">Cerrar sesion</a>

