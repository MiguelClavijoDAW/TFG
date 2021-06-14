<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajo.php";
    require_once "../Model/Trabajador.php";
    $aux=new Trabajo(0,0,$_SESSION['c']);
    $aux2=new Trabajador("","","",$_SESSION['c']);
    $puesto=$aux2->verPuesto();
    $tarea=$aux->tareaAsignada();
    include "../View/verTareasAsignadas_view.php";
?>