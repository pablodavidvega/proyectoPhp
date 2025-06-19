<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<br>
<h1>NuevoEMPLEADOS</h1>
<br>
<a href="<?php echo base_url('/empleados'); ?>" class="btn btn-success">Regresar</a>
<form method="post" action="<?php echo base_url('/empleados/guardar');?>">
    <!-- b-card-header  -->
 <div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <h5 class="card-title">Ingrese todos los datos solicitados</h5>
        <p class="card-text">
            <div class="form-group">
                <label >Cedula</label>
                <input class="form-control" type="text" name="ced_empleado">
            </div>
            <div class="form-group">
                <label >Nombre</label>
                <input class="form-control" type="text" name="nombre_emp">
            </div>
              <div class="form-group">
                <label >Apellido</label>
                <input class="form-control" type="text" name="apellido_emp">
            </div>
            <!-- b-formgroup  -->
              <div class="form-group">
                <label >correo</label>
                <input class="form-control" type="text" name="email_emp">
            </div>
              <div class="form-group">
                <label >Direccion</label>
                <input class="form-control" type="text" name="direccion_emp">
            </div>
              <div class="form-group">
                <label >Telefono</label>
                <input class="form-control" type="text" name="telefono_emp">
            </div>
            <div class="form-group">
                <input  class="btn btn-success" type="submit" value="Ingresar">
                <input  class="btn btn-warning" type="reset" value="Cancelar">
            </div>
        </p>
    </div>
 </div>   
</form>
<?php echo $this->endSection();?>
