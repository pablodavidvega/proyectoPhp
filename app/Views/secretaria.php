<?= $this ->extend('plantilla/layout'); ?>
<?= $this ->section('contenido'); ?>

<h2>Bienvenido Secretari@</h2>
<p>Esta es tu pagina de inicio</p>

<a href="<?= base_url('/logout'); ?>" class="btn btn-danger float-star">Cerrar sesion</a>

<?= $this-> endSection(); ?>
