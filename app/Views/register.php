<h2>Registro</h2>

<?php if (isset($validation)) : ?>
    <div style="color: red;">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('/registro/guardar') ?>" method="post">
    <label>Usuario</label>
    <input type="text" name="nombre_emp" value="<?= old('usuario') ?>"><br><br>

    <label>Email</label>
    <input type="email" name="email_emp" value="<?= old('email') ?>"><br><br>

    <label>Contraseña</label>
    <input type="password" name="password"><br><br>

    <label>Confirmar contraseña</label>
    <input type="password" name="confirmar"><br><br>

    <button type="submit">Registrarse</button>
</form>
