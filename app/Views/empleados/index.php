<?php

use App\Controllers\Empleados;

 echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<br>
<h1>EMPLEADOS</h1>
<br>
<a href="<?php echo base_url('/empleados/crear'); ?>" class="btn btn-success">Agregar Empleado</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">cedula</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">mail</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
      <th scope="col">acciones</th>
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

<a href="<?= base_url('/logout'); ?>" class="btn btn-danger float-star">Cerrar sesion</a>
<br>
<?php echo $this->endSection();?>