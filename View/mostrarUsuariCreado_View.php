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
        <h1 style="margin: 10px auto;">Usuario Creado Correctamente</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Clave</th>
                </tr>
            </thead>
            <tbody>
                <td><?= $registro[0] ?></td>
                <td><?= $registro[1] ?></td>
            </tbody>
        </table>
        <form action="../Controller/home.php" method="post">
            <input type="submit" value="Volver al Inicio" name="volver" class="btn btn-dark">
        </form>
    </div>
</body>

</html>