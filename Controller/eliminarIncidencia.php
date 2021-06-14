<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    if(!isset($_REQUEST['eliminar'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Incidencia.php";
    $aux=new Incidencia($_REQUEST['codigo']);
    $aux->eliminarIncidencia();
    include "../View/verificacio_view.php";
?>