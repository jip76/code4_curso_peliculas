<?= $this->extend('Layouts/web') ?> 
<?= $this->section('contenido')?>
<?= view('partials/_form_error') ?>

<form action="<?= route_to('login_post')?>" method="post">
  <!-- Email input -->  
  <label  for="email">Email/usuario</label>
    <input type="text" id="email" name="email" />       
  <!-- Password input -->
    <label  for="contrasena">Contraseña</label>
    <input type="password" id="contrasena" name="contrasena" />  

    <input type="submit" value="enviar">
 
</form>
<?= $this->endSection()?>


