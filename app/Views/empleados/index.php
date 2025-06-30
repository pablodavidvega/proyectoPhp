<?php

use App\Controllers\Empleados;

 echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<br>
<h1>Personas</h1>
<br>
<a href="<?php echo base_url('/empleados/crear'); ?>" class="btn btn-success">Agregar Persona</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Cédula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Mail</th>
      <th scope="col">Dirección</th>
      <th scope="col">teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $emp):

    ?>
    <tr>
      <th scope="row"><?php echo $emp['ced_empleado']; ?> </th>
      <td><?php echo $emp['nombre_emp']; ?></td>
      <td><?php echo $emp['apellido_emp']; ?></td>
      <td><?php echo $emp['email_emp']; ?></td>
      <td><?php echo $emp['direccion_emp']; ?></td>
      <td><?php echo $emp['telefono_emp']; ?></td>
      <td>
        <a href="<?php echo base_url('/empleados/editar/'.$emp['ced_empleado']);?>" class="btn btn-warning">Editar</a>
        <a href="<?php echo base_url('/empleados/eliminar/'.$emp['ced_empleado']);?>" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <?php endforeach;?> 
    
  </tbody>
</table>
<br>
<a href="<?= base_url('/logout'); ?>" class="btn btn-danger">Cerrar sesion</a>
<?php echo $this->endSection();?>