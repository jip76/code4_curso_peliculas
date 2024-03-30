<?= $this->extend('Layouts/web') ?>

<?= $this->section('contenido') ?>

<?= view('partials/_form_error') ?>

<form action="<?= route_to('registrar_post') ?>" method="post">

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">

    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="contrasena">Contrasena</label>
    <input type="password" name="contrasena" id="contrasena">

    <input type="submit" value="Enviar">

</form>

<?= $this->endSection() ?>


