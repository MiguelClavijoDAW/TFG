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
        <h1 style="margin: 10px auto;">Bienvenido <?= $_SESSION['nom']; ?></h1>
    </div>
    <div class="container">
        <div class="row row-cols-2">
            <?php
            if ($puesto == "Administrador") {
            ?>
                <a href="../Controller/crearUsuario.php">
                    <div id="caja2" class="col">
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">CREAR USUARIO</div>
                            <div class="card-body text-secondary">
                                <p class="card-text">Crear un usuario para otro trabajador (Solo para cuentas de Administrador)</p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>

            <a href="../Controller/trabajoPendiente.php">
                <div id="caja3" class="col ">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Trabajo Pendiente</div>
                        <div class="card-body text-secondary">
                            <p class="card-text">Consulta tu trabajo pendiente o asigna trabajos a otros trbajadore (Solo para cuenta de Encargados)</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="../Controller/verIncidencia.php">
                <div id="caja5" class="col">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Control de Incidencia</div>
                        <div class="card-body text-secondary">
                            <p class="card-text">Crear Tickes para reportar errores o problemas con la cuenta </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            if ($puesto == "Tecnico") {
            ?>
                <a href="../Controller/verTodasIncidencia.php">
                    <div id="caja4" class="col">
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Ver todas las Incidencia</div>
                            <div class="card-body text-secondary">
                                <p class="card-text">Solo para tecnicos. Ver todas las incidencias por arreglar </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
        <a href="../Index.php" style="margin: 0 auto;" class="btn btn-danger">Cerrar Sesion</a>
        <a href="../Controller/cambiarClave.php" style="margin: 0 auto;" class="btn btn-info">Cambiar Clave</a>
    </div>
</body>

</html>