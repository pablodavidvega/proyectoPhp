<?= $this->extend('plantilla/layout') ?>
<?= $this->section('contenido') ?>

<h2>Usuarios registrados</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol (Perfil)</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($usuarios as $usu): ?>
    <tr>
        <td><?= $usu['id_usuario'] ?></td>
        <td><?= $usu['nombre_usu'] ?></td>
        <td><?= $usu['email'] ?></td>
        <td><?= $usu['id_perfil'] ?></td>
        <td>
            <a href="<?= base_url('/dashAdmin/editar/' . $usu['id_usuario']) ?>">Editar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
