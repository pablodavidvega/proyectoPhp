<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<br>
<h1>NuevoEMPLEADOS</h1>
<br>
<form method="post" action="<?php echo base_url('/empleados/actualizar/'
            .$empleado['ced_empleado']);?>">
    <!-- b-card-header  -->
 <div class="card">
    <div class="card-header">
        editar Empleado
    </div>
    <div class="card-body">
        <h5 class="card-title">modifique todos los datos a Editar</h5>
        <p class="card-text">
            <div class="form-group">
                <label >Cedula</label>
                <input class="form-control" type="text" name="ced_empleado" readonly
                value="<?= $empleado['ced_empleado']?>">
            </div>
            <div class="form-group">
                <label >Nombre</label>
                <input class="form-control" type="text" name="nombre_emp"
                value="<?= $empleado['nombre_emp']?>">
            </div>
              <div class="form-group">
                <label >Apellido</label>
                <input class="form-control" type="text" name="apellido_emp"
                value="<?= $empleado['apellido_emp']?>">
            </div>
            <!-- b-formgroup  -->
              <div class="form-group">
                <label >correo</label>
                <input class="form-control" type="text" name="email_emp"
                value="<?= $empleado['email_emp']?>">
            </div>
              <div class="form-group">
                <label >Direccion</label>
                <input class="form-control" type="text" name="direccion_emp"
                value="<?= $empleado['direccion_emp']?>">

            </div>
              <div class="form-group">
                <label >Telefono</label>
                <input class="form-control" type="text" name="telefono_emp"
                value="<?= $empleado['telefono_emp']?>">

            </div>
            <div class="form-group">
                <input  class="btn btn-success" type="submit" value="modificar">
            </div>
        </p>
    </div>
 </div>   
</form>
<?php echo $this->endSection();?>
