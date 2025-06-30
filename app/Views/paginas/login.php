<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
<?= $this->endSection() ?>

<div class="login-container">
    <a href="<?= base_url('/') ?>" class="btn-back-page  btn btn-secondary" style="display: inline-flex; align-items: center;">
        <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>
        Volver a la página Principal
    </a>            

        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">


            <div class="card shadow p-4 animate__animated animate__fadeIn" style="width: 100%; max-width: 400px;">
                <h3 class="text-center mb-4">Iniciar sesión</h3>
    
                <?php if(session('mensaje')): ?>
                    <div class="alert alert-danger text-center">
                        <?= session('mensaje'); ?>
                    </div>
                <?php endif; ?>
    
                <form method="post" action="<?= base_url('login/acceder') ?>">
    
                    <div class="mb-3">
                        <label class="form-label">Nombre de usuario</label>
                        <input type="text" name="usuario" class="form-box-input form-control" placeholder="Ej: Markets" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="********" required>
                    </div>
    
                    <button type="submit" class="btn btn-primary btn-login w-100">Ingresar</button>
                </form>
            </div>
        </div>
</div>
<?php echo $this->endSection();?>


