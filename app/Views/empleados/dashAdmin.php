<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('css/dash.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashVendedor.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/dashAdmin.css') ?>">

<?= $this->endSection() ?>

<main>
  <a href="<?= base_url('/logout'); ?>" class="btn btn-logout">Cerrar sesion</a>

  <section id="Secmenu">
    <div class="menu-dashboard">
      <a href="javascript:history.back()" class="btn-logout btn btn-secondary" style="display: inline-flex; align-items: center;">
        <i class='bx bx-arrow-back' style="font-size: 18px; margin-right: 5px;"></i>

        Volver a la página anterior
      </a>
      <!-- Logo -->
      <div class="top-menu">
        <a href="<?= base_url('vendedor/dashboard') ?>">
          <div class="logo">
            <img src="<?= base_url('img/logo.jpg') ?>" alt="Logo" width="150">
            <span>MarketS</span>
          </div>
        </a>
      </div>

      <!-- Búsqueda -->
      <div class="input-search">
        <i class='bx bx-search'></i>
        <input type="text" class="input" placeholder="Buscar">
      </div>

      <!-- Menú del vendedor -->

      <div class="menu">
        <div class="enlace">
          <a onclick="cargarContenido('/empleados/listado')">
            <i class='bx bx-user'></i>
            <span>Lista de Personas</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('registrar_venta.html')">
            <i class='bx bx-dollar'></i>
            <span>Gestión de usuarios</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('registrar')">
            <i class='bx bx-dollar'></i>
            <span> Gestión de productos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('pedidos.html')">
            <i class='bx bx-cart'></i>
            <span>Pedidos y ventas</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('productos.html')">
            <i class='bx bx-box'></i>
            <span>Métodos de pago</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-file'></i>
            <span>Envíos</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class='bx bx-package'></i>
            <span>Configuración</span>
          </a>
        </div>

        <div class="enlace">
          <a onclick="cargarContenido('facturas.html')">
            <i class="bx bx-cart"></i>
            <span>Exportar a Excel</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="Seccontenido">
    <div id="contenido-principal">
      <!-- Encabezado -->
      <div>
        <h1 class="admin-css">Administrador</h1>
        
        <?php $busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : ''; ?>

        <form method="get" action="" style="display: inline-block; margin-right: 10px;">
            <input type="text" name="busqueda" placeholder="Buscar usuario..." value="<?= esc($busqueda) ?>" />
            <button type="submit" class="btn-pink btn btn-primary">Buscar</button>
        </form>

        <a href="<?= base_url('admin/exportarExcel?busqueda=' . $busqueda) ?>" class="btn-pink btn-pink-excel btn btn-success">
            Exportar Excel
        </a>
      </div>

      <!-- Resumen -->
      <h3 class="mt-5">Lista de Usuarios</h3>
      <table class="table table-bordered">
        <thead class="table-thead">
          <tr class="table-tr">
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <!-- <th>Contraseña</th> -->
            <th>Rol</th>
            <!-- <th>Cédula</th> -->
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario): ?>
            <tr>
              <td><?= $usuario['id_usuario'] ?></td>
              <td><?= $usuario['nombre_usu'] ?></td>
              <td><?= $usuario['email'] ?></td>
              <td><?= $usuario['id_perfil'] ?></td>
              <td>
                <!-- Cambiar rol -->
                <form class="action-form" action="<?= base_url('/admin/cambiarRol') ?>" method="post">
                  <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                  <select class="select-form" name="id_perfil">
                    <option class="select-form" value="1" <?= $usuario['id_perfil'] == 1 ? 'selected' : '' ?>>Admin</option>
                    <option class="select-form" value="2" <?= $usuario['id_perfil'] == 2 ? 'selected' : '' ?>>Vendedor</option>
                    <option class="select-form" value="3" <?= $usuario['id_perfil'] == 3 ? 'selected' : '' ?>>Cliente</option>
                  </select>
                  <button class="btn-update" type="submit">Actualizar</button>
                </form>

                <!-- Eliminar -->
                <form action="<?= base_url('admin/eliminarUsuario') ?>" method="post" style="display:inline-block;">
                  <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                  <button type="submit" class="btn-delete btn btn-danger btn-sm">Eliminar</button>
                </form>

                <!-- Editar (abre modal) -->
                <button type="button" class="btn-edit btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal<?= $usuario['id_usuario'] ?>">
                  Editar
                </button>
              </td>
            </tr>

            <!-- Modal para editar usuario -->
            <div class="modal fade" id="editarUsuarioModal<?= $usuario['id_usuario'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $usuario['id_usuario'] ?>" aria-hidden="true">
              <div class="modal-dialog">
                <form action="<?= base_url('/admin/editarUsuario') ?>" method="post">
                  <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalLabel<?= $usuario['id_usuario'] ?>">Editar Usuario</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre_usu" class="form-input-modal form-control" value="<?= $usuario['nombre_usu'] ?>" required>
                      </div>
                      <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-input-modal form-control" value="<?= $usuario['email'] ?>" required>
                      </div>
                      <div class="mb-3">
                        <label>Cédula</label>
                        <input type="text" name="ced_empleado" class="form-input-modal form-control"
                              value="<?= $usuario['ced_empleado'] ?>"
                              required maxlength="15" pattern="[0-9]+" title="Solo números">
                      </div>
                      <!-- Puedes agregar más campos aquí si necesitas -->
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn-pink btn btn-primary">Guardar cambios</button>
                      <button type="button" class="btn-pink btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <?php endforeach; ?>

        </tbody>

      </table>

    </div>
  </section>

</main>

<?php echo $this->endSection(); ?>