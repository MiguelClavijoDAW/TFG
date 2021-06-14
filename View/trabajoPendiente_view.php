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
        <h1 style="margin: 10px auto;">Trabajo Pendiente</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tarea</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha Maxima</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($total as $item) {
                        ?>
                        <tr>
                            <td><?=$item->getFecha();?></td>
                            <td><?=$item->getTarea();?></td>
                            <td><?=$item->getEstado();?></td>
                            <td><?=$item->getFecha_max();?></td>
                            <td>
                                <form action="../Controller/editarTrabajo.php" method="post">
                                    <input type="hidden" name="codigo" value="<?=$item->getCodigo();?>">
                                    <input type="submit" name="editar" value="Editar" class="btn btn-success">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <?php 
            if($puesto=="Encargado"){
                ?>
                <form action="../Controller/asignarTarea.php" method="post">
                    <input type="submit" value="Asignar Tarea" name="asignar" class="btn btn-primary">
                </form><br>
                <form action="../Controller/verTareasAsignadas.php" method="post">
                    <input type="submit" value="Ver Tareas Asignadas" name="ver" class="btn btn-primary">
                </form>
                <?php
            }
        ?>
        <br><br>
        <form action="../Controller/home.php" method="post">
            <input type="submit" value="Volver al Inicio" name="volver" class="btn btn-dark">
        </form>
    </div>
</body>

</html>