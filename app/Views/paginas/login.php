<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto clase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
  </head>
    <body>
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
                        <input type="text" name="usuario" class="form-control" placeholder="Ej: Markets" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="********" required>
                    </div>
    
                    <button type="submit" class="btn btn-primary btn-login w-100">Ingresar</button>
                </form>
            </div>
        </div>
    </body>
</html>

