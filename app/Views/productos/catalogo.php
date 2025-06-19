
    <?php echo $this -> extend('plantilla/layout'); ?>
    <?php echo $this -> section('contenido') ?>
        <br>
        Bienvenidos a la pagina de productos
        <br> 
        <table class="table">
            <thead>
                <th>codigo de barras</th>
                <th>nombre producto</th>
                <th>stock</th>
            </thead>
            <tbody>
                <?php foreach($producto as $productos): ?>
                    <tr>
                        <td><?php echo $productos -> codigo_barra; ?></td>
                        <td><?php echo $productos -> nombre_prod; ?></td>
                        <td><?php echo $productos -> stock; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    <?php echo $this -> endSection('contenido'); ?>