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
        <h1 style="margin: 10px auto;">Asignar Tarea</h1>
    </div>
    <div class="container">
        <form action="../Controller/guardarTareaAsignada.php" id="formulario" method="post">
            <div class="form-group col-md-4">
                <select id="trabajador" class="form-control" name="trabajador">
                    <option selected value="0">ELIGE UN TRABAJADOR</option>
                    <?php
                    foreach ($trabajadores as $item) {
                    ?>
                        <option value="<?= $item->getCodigo(); ?>"><?= $item->getNombre(); ?></option>
                    <?php
                    }
                    ?>
                </select><br>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tarea*</span>
                </div>
                <input type="text" class="form-control" placeholder="Tarea" aria-label="Tarea" aria-describedby="basic-addon1" name="tarea" required>
            </div>
            <input type="hidden" name="estado" value="pendiente">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Fecha Maxima*</span>
                </div>
                <input type="date" class="form-control" value="0" name="fechaMax" id="fecha_max" placeholder="fecha_max" aria-label="fecha_max" aria-describedby="basic-addon1" required>
            </div>
            <input type="submit" value="Asignar" name="enviar" class="btn btn-primary">
        </form><br>
        <form action="../Controller/home.php" method="post">
            <input type="submit" value="Volver Al Inicio" class="btn btn-dark">
        </form>

    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
         document.getElementById("formulario").addEventListener('submit', validarFormulario);
      });

      function validarFormulario(evento) {
         evento.preventDefault();
         var trabajador = document.getElementById('trabajador').value;
         if (trabajador == 0) {
            alert('Debes seleccionar un trabajador');
            return;
         }
         var fecha=document.getElementById('fecha_max').value;
         var actual=Date.now()
         var x=new Date(actual);
         var maxima=new Date(fecha);
         console.log(x);
         if(maxima<x){
             alert('La fecha Maxima no puede ser menor a la actual');
             return;
         }
         this.submit();
      }
   </script>
</body>

</html>