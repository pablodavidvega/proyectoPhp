<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('css/secre.css') ?>">
<?= $this->endSection() ?>

<br>
<h1 class="title-secre">Bienvenidos Secretaria</h1>
<p>Esta es tu pagina de inicio</p>
<br>

<a href="<?= base_url('/logout'); ?>" class="btn btn-danger">Cerrar sesion</a>
<?php echo $this->endSection();?>