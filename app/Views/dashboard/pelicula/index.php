
<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido')?>
<h1>Listado de Peliculas</h1>
    <table class="table">
        <a href="/dashboard/pelicula/new">Crear</a>
       
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>descripcion</th>
            <th>opciones</th>
           
        </tr>
            <?php foreach($peliculas as $key => $p) :  ?>
                    <tr>
                        <td><?= $p->id ?></td>
                        <td><?= $p->titulo ?></td>
                        <td><?= $p->descripcion ?></td>
                        <td>
                            <a href="/dashboard/pelicula/show/<?= $p->id ?>">Show</a>
                            <a href="/dashboard/pelicula/edit/<?= $p->id ?>">edit</a>           
                             <form action="/dashboard/pelicula/delete/<?= $p->id ?>" method="post">
                              <button type="submit"> eliminar</button>
                            </form>
                        </td>
                    <tr>
            <?php endforeach ?>
    </table>

<?= $this->endSection()?>


