<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
<?= $this->endSection() ?>

<div class="login-container">
   <div class="container-logo-login">
        <a href="<?= base_url('/') ?>" class="btn-back-page btn btn-secondary" style="display: inline-flex; align-items: center;">
            <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>
            Volver a la página Principal
        </a>    
        <a href="" class="text-decoration-none">
            <img src="<?= base_url('img/MS.jpg') ?>" alt="">
            <h1 class="img-login m-0 display-5 font-weight-semi-bold">
                <span class="logo-login-text text-primary font-weight-bold border px-3 mr-1">Market</span>S
            </h1>
        </a>      
   </div>

   <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card-login card shadow p-4 animate__animated animate__fadeIn" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Registrarse</h3>

            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger text-center">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/registro/guardar') ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Nombre de usuario</label>
                    <input type="text" name="nombre_emp" class="form-box-input form-control" placeholder="Ej: Juan Pérez" value="<?= old('nombre_emp') ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email_emp" class="form-control" placeholder="Ej: correo@example.com" value="<?= old('email_emp') ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="confirmar" class="form-control" placeholder="********" required>
                </div>

                <button type="submit" class="btn btn-primary btn-login w-100">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
