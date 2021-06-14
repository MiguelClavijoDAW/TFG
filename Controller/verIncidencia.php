<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Incidencia.php";
    $aux=new Incidencia(0,$_SESSION['c']);
    $incidencia=$aux->incidenciaTrabajador();
    include "../View/verIncidencia_view.php";
?>