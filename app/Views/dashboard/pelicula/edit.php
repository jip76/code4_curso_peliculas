
<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>
<?= view('partials/_form_error') ?>

<form action="/dashboard/pelicula/update/<?= $pelicula->id ?>" method="post">
     <?= view('dashboard/pelicula/_form.php',['op'=>'Actualizar'])?>
    </form>

<?= $this->endSection()?>


