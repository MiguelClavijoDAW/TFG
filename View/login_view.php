<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <title>Login</title>
   <link rel="stylesheet" href="../css/estilo.css">
   <style>
      body {
         background-image: url("../img/fondo.jpg");
      }
   </style>
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h2>Inicio de Seción</h2>
         <p>En caso de no tener cuentra contacte con tu superior</p>
      </div>
   </div>
   <div class="main bg-light" style="width: 40%; border-radius:0.5rem;">
      <div class="col-md-6 col-sm-12 ">
         <div class="login-form ">
            <form action="../Controller/login.php" id="formulario" method="post">
               <div class="form-group">
                  <label style="margin-top: 1rem;">Usuario</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
               </div>
               <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
               </div>
               <button type="submit" class="btn btn-black">Login</button>
            </form>
         </div>
      </div>
      <br>
      <a href="../Controller/descargarManual.php" style="margin-bottom: 1rem;" class="btn btn-info">Descargar Tutorial</a>
      <br>
      <?php

      if ($aux) {
      ?>
         <div>
            <a href="../Controller/crearPrimerUsuario.php" style="margin: 1rem auto;" class="btn btn-success">Primer Usuario</a>
         </div>

      <?php
      }
      ?>
   </div>
   <script>
      document.addEventListener("DOMContentLoaded", function() {
         document.getElementById("formulario").addEventListener('submit', validarFormulario);
      });

      function validarFormulario(evento) {
         evento.preventDefault();
         var usuario = document.getElementById('usuario').value;
         if (usuario.length == 0) {
            alert('Debes rellenar el campo Usuario');
            return;
         }
         var pass = document.getElementById('pass').value;
         if (pass.length == 0) {
            alert('Debes rellenar el campo Contraseña')
            return;
         }
         this.submit();
      }
   </script>
</body>

</html>