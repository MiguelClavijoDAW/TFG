<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajador.php";
    require_once "../Model/Incidencia.php";
    $aux=new Trabajador("","","",$_SESSION['c']);
    $puesto=$aux->verPuesto();
    if($puesto!="Tecnico"){
        header("Location: ../Index.php");
    }
    $incidencias=Incidencia::getIncidencias();
    include "../View/verTodasIncidencia_view.php";
?>