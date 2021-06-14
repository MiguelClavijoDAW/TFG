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
        <h1 style="margin: 10px auto;">Cambiar Contraseña</h1>
    </div>
    <div class="container">
        <form action="../Controller/guardarClave.php" method="post" id="formulario">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nueva Contraseña</span>
            </div>
            <input type="password" class="form-control" id="pass1" name="pass" placeholder="Clave" aria-label="Clave" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Repite la Contraseña</span>
            </div>
            <input type="password" class="form-control" id="pass2" placeholder="Clave" aria-label="Clave" aria-describedby="basic-addon1">
        </div>
        <input type="submit" value="Cambiar" name="enviar" class="btn btn-primary">
    </form><br>
    <form action="../Controller/home.php" method="post">
            <input type="submit" value="Volver Al Inicio" class="btn btn-dark">
        </form>
    </div>
    
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formulario").addEventListener('submit', validarFormulario);
    });

    function validarFormulario(evento) {
        evento.preventDefault();
        var clave1 = document.getElementById('pass1').value;
        var clave2 = document.getElementById('pass2').value;
        if (clave1!=clave2) {
            alert('Las Claves no coinciden');
            return;
        }
        this.submit();
    }
</script>

</html>