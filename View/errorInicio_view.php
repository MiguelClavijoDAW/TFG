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
        <h1 style="margin: 10px auto;">ERROR</h1>
    </div>
    <?php
    if (isset($puesto)) {
        if ($puesto == "error") {
    ?>
            <div class="container">
                <h1 style="color: red; text-align: center;">Puesto no seleccionado</h1>
                <a href="../Controller/crearUsuario.php" style="margin: 0 auto;" class="btn btn-danger">Volver</a>

            </div>
        <?php
        }
    }else if(isset($aux)){
            if($aux->getCod_trabajador()==0){
            ?>
            <div class="container">
                <h1 style="color: red; text-align: center;">Trabajador no Seleccionado</h1>
                <a href="../Controller/asignarTarea.php" style="margin: 0 auto;" class="btn btn-danger">Volver</a>

            </div>
            <?php
            }
    } else {
        ?>
        <div class="container">
            <h1 style="color: red; text-align: center;">USUARIO NO ENCONTRADO</h1>
            <a href="../Index.php" style="margin: 0 auto; text-align: center;" class="btn btn-danger">Volver</a>

        </div>
    <?php
    }
    ?>

</body>

</html>