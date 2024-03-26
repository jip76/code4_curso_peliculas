    <?= $this->extend('Layouts/dashboard') ?>
    <?= $this->section('header')?>
    Listado de Categorías
    <?= $this->endSection('')?>
    <?= $this->section('contenido')?>
    <a href="/dashboard/categoria/new">Crear</a>
    <table class="table">     
       
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>opciones</th>
           
        </tr>
            <?php foreach($categorias as $key => $p) :  ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['titulo'] ?></td>
                       
                        <td>
                            <a href="/dashboard/categoria/show/<?= $p['id'] ?>">Show</a>
                            <a href="/dashboard/categoria/edit/<?= $p['id'] ?>">edit</a>           
                             <form action="/dashboard/categoria/delete/<?= $p['id'] ?>" method="post">
                              <button type="submit"> eliminar</button>
                            </form>
                        </td>
                    <tr>
            <?php endforeach ?>
    </table>
    <?= $this->endSection()?>
