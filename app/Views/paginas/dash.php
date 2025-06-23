<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>

<main><!-- creo una caja grande que encierre todo lo que realizo-->

<section id="Secmenu"> <!--para separar la parte del menu con la parte blanca-->

<div class="menu-dashboard">
        <!--TOP MENU-->
        <div class="top-menu">
            <a href="index.html">
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

<?php echo $this->endSection();?>