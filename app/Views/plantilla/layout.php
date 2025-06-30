<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto clase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/welcome.css') ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

      <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" -->
    <link rel="stylesheet" href="<?= base_url('css/style.css')?>">

     <link rel="stylesheet" href="<?= base_url('css/global.css') ?>">
    <!-- Aquí se insertará el CSS personalizado de cada vista -->
    <?= $this->renderSection('css') ?>
    

  </head>
  <body>
    <?php if(session()->has('usuario')): ?>
      <div class="welcome-user-message" style="text-align: right; padding: 10px;">
          Bienvenido, <strong><?= session('usuario'); ?></strong>
      </div>
    <?php endif; ?>

    <?php echo $this -> renderSection('contenido'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>