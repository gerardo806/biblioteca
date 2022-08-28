<h1 class="text-center">Lista de libros</h1>

<table class="table" id="table-data">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($libros as $libro): ?>
        <tr>
            <th scope="row"> <?=$libro['id']?> </th>
            <td> <?=$libro['nombre']?> </td>
            <td> <?=$libro['imagenes']?> </td>
            <td>
                <a href="#" class="btn btn-primary">
                    <img class="icon-navbar" src="<?=base_url()?>/public/img/icons/pen.png" alt="Editar">
                </a>
            </td>
            <td>
                <a href="#" class="btn btn-danger">
                    <img class="icon-navbar" src="<?=base_url()?>/public/img/icons/trash.png" alt="Eliminar">
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="<?=base_url()?>/public/js/vanilla-dataTables.min.js"></script>
<script>
    var $table = document.getElementById('table-data');
    var $data = new DataTable($table);
</script>