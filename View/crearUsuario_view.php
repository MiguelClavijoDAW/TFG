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
        <h1 style="margin: 10px auto;">Crear un Nuevo Usuario</h1>
    </div>
    <div class="container">
        <form action="../Controller/generarUsuario.php" id="formulario" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">DNI</span>
                </div>
                <input type="text" name="dni" id="dni" class="form-control" placeholder="DNI" aria-label="DNI" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" aria-label="nombre" aria-describedby="basic-addon1" required>
            </div>
            <?php
            if (isset($x)) {
            ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Puesto</label>
                    </div>
                    <select class="custom-select" name="puesto" id="puesto" >
                        <option value="0">Elige</option>
                        <option value="1">Trabajador</option>
                        <option value="2">Encargado</option>
                        <option value="3">Tecnico</option>
                        <option selected value="4">Administracion</option>
                    </select>
                </div>
            <?php
            } else {


            ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Puesto</label>
                    </div>
                    <select class="custom-select" name="puesto" id="puesto">
                        <option selected  value="0">Elige</option>
                        <option value="1">Trabajador</option>
                        <option value="2">Encargado</option>
                        <option value="3">Tecnico</option>
                        <option value="4">Administracion</option>
                    </select>
                </div>
            <?php } ?>
            <input type="submit" class="btn btn-primary" value="Registrar">

        </form>
        <br>
        <a href="../Controller/home.php" style="margin: 0 auto;" class="btn btn-danger">Volver</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("formulario").addEventListener('submit', validarFormulario);
        });

        function validarFormulario(evento) {
            evento.preventDefault();
            var titulo = document.getElementById('dni').value;
            if (titulo.length == 0) {
                alert('Debes rellenar el campo DNI');
                return;
            }
            var des = document.getElementById('nombre').value;
            if (des.length==0) {
                alert('Debes rellenar el campo Nombre');
                return;
            }
            var puesto=document.getElementById('puesto').value;
            if(puesto==0){
                alert('Debe seleccionar un puesto');
                return;
            }
            this.submit();
        }
    </script>
</body>

</html>