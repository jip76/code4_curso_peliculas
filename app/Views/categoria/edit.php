<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar pelicula</title>
</head>
<body>
    <form action="/categoria/update/<?= $categoria['id'] ?>" method="post">
     <?= view('categoria/_form.php',['op'=>'Actualizar'])?>
    </form>
</body>
</html>