<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Incidencia.php";
    $incidencia=new Incidencia($_REQUEST['codigo'],0,"","","SOLUCIONADO",$_SESSION['c']);
    $incidencia->solucionarIncidencia();
    include "../View/verificacio_view.php";
?>