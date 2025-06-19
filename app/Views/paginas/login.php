<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<h1>Iniciar sesion</h1>

<?php if(session('mensaje')): ?>
    <div class="alert alert-danger"><?= session('mensaje') ?></div>
<?php endif; ?>

<form method="post" action="<? base_url('login/acceder') ?>">
 <input type="text" name="usuario" placeholder="usuario" required> <br>
 <input type="password" name="password" placeholder="Contraseña" required> <br>
 <button type="submit">Ingresar</button>
</form>

<?php echo $this-> endSection(); ?>
