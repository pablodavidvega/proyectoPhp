<?php echo $this -> extend('plantilla/layout'); ?>
<?php echo $this -> section('contenido'); ?>

    <div class="form-group">
        <label for="">usuario:</label>
        <input type="text" class="form-control">
        <input class="btn btn-primary" type="button">
    </div>
<?php echo $this -> endSection(); ?>