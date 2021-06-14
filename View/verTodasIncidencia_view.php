<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>

<body>
<div class="row caja1">
        <h1 style="margin: 10px auto;">Ver Todas Las Incidencias</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Trabajador</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($incidencias as $item) {
                    $x=new Trabajador("","","",$item->getCodigo_trabajador());
                        $nombre=$x->tenerNombre();
                ?>
                    <tr>
                        <td><?= $item->getTitulo(); ?></td>
                        <td><?= $item->getDescripcion(); ?></td>
                        <td><?= $item->getEstado(); ?></td>
                        <td><?=$nombre;?></td>
                        <td>
                            <form action="../Controller/arreglarIncidencia.php" method="post">
                                <input type="hidden" name="codigo" value="<?= $item->getCodigo(); ?>">
                                <input type="submit" name="editar" value="Solucionar" class="btn btn-success">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <form action="../Controller/home.php" method="post">
            <input type="submit" value="Volver al Inicio" name="volver" class="btn btn-dark">
        </form>
    </div>
</body>

</html>