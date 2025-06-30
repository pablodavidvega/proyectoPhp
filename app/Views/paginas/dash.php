<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/dash.css">
    <script src="js/dash.js" defer></script>
    <title>MarketS</title>
</head>
<body>

<main><!-- creo una caja grande que encierre todo lo que realizo-->

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
                    <img src="img/MS.jpg">
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
            <span>Usuarios</span>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('analitics.html')">
                <i class='bx bxs-grid-alt'></i>
                <span>Estadisticas</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('mensajes.html')">
                <i class='bx bx-message-square'></i>
                <span>Mensajes</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('ARCHIVOS.html')">
                <i class='bx bx-file-blank'></i>
                <span>Archivos</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('pedidos.html')">
                <i class='bx bx-cart'></i>
                <span>Pedidos</span>
            </a>
        </div>
        <div class="enlace">
            <a onclick="cargarContenido('505sant.html')">
                <i class='bx bx-cog'></i>
                <span>Configuración</span>
            </a>
            </a>
        </div>
    </div>
</div>
</section>

<section id="Seccontenido">
    <div>
        <h1>Tu Dashboard</h1>
    </div>

    <!-- Contenedor de tarjetas -->
    <div class="cards-container">
        <div class="card">
            <h3>Ventas</h3>
            <p>$10,000</p>
        </div>
        <div class="card">
            <h3>Usuarios</h3>
            <p>500</p>
        </div>
        <div class="card">
            <h3>Pedidos</h3>
            <p>120</p>
        </div>
    </div>
</section>

</main>

</body>
</html>