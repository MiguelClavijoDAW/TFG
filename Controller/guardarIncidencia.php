<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Incidencia.php";
    $incidencia=new Incidencia(0,$_SESSION['c'],$_REQUEST['titulo'],$_REQUEST['descripcion']);
    $incidencia->guardarIncidencia();
    include "../View/verificacio_view.php";
?>