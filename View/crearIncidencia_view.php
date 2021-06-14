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
        <h1 style="margin: 10px auto;">Crear Incidencia</h1>
    </div>
    <div class="container">

        <form action="../Controller/guardarIncidencia.php" id="formulario" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Titulo</span>
                </div>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="titulo" aria-label="titulo" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Descipcion</span>
                </div>
                <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripcion" aria-label="Descripcion" aria-describedby="basic-addon1" required>
            </div>
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
        </form><br>
        <a href="../Controller/home.php" class="btn btn-danger">Cancelar</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("formulario").addEventListener('submit', validarFormulario);
        });

        function validarFormulario(evento) {
            evento.preventDefault();
            var titulo = document.getElementById('titulo').value;
            if (titulo.length == 0) {
                alert('Debes rellenar el campo titulo');
                return;
            }
            var des = document.getElementById('descripcion').value;
            if (des.length==0) {
                alert('Debes rellenar el campo Descripcion');
                return;
            }
            this.submit();
        }
    </script>
</body>

</html>