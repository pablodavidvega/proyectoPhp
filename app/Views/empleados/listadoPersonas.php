<link rel="stylesheet" href="<?= base_url('css/agregarUsuario.css') ?>">


<br>
<h1>Personas</h1>
<br>
<a href="javascript:void(0);" onclick="cargarContenido('<?= base_url('/empleados/crear'); ?>')" class="btn btn-success">Agregar Persona</a>

<form action="<?= base_url('/empleados/exportar') ?>" method="get" class="d-flex mb-2 " role="search">
    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar empleado..." value="<?= esc($_GET['busqueda'] ?? '') ?>">
    <button class="btn btn-primary float-end btn-excel" type="submit">Exportar filtrado a excel</button>
</form>

<a href="<?= base_url('/empleados/exportar'); ?>" class="btn btn-primary float-end btn-excel">Exportar todos los registros a excel</a>

<br><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Mail</th>
      <th>Dirección</th>
      <th>Teléfono</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $emp): ?>
    <tr>
      <td><?= $emp['ced_empleado']; ?></td>
      <td><?= $emp['nombre_emp']; ?></td>
      <td><?= $emp['apellido_emp']; ?></td>
      <td><?= $emp['email_emp']; ?></td>
      <td><?= $emp['direccion_emp']; ?></td>
      <td><?= $emp['telefono_emp']; ?></td>
      <td>
        <a href="javascript:void(0);" onclick="cargarContenido('/empleados/editar/<?= $emp['ced_empleado']; ?>')" class="btn btn-editar">Editar</a>
        <a href="<?php echo base_url('/empleados/eliminar/'.$emp['ced_empleado']);?>" class="btn btn-delete">Eliminar</a>

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br>
<a href="<?= base_url('/logout'); ?>" class="btn btn-danger float-star">Cerrar sesion</a>

