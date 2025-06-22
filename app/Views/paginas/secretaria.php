<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<br>
<h1>Bienvenidos Secretaria</h1>
<p>Esta es tu pagina de inicio</p>
<br>

<a href="<?= base_url('/logout'); ?>" class="btn btn-danger">Cerrar sesion</a>
<?php echo $this->endSection();?>
