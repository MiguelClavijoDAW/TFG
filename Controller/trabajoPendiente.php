<?php 
    session_start();
    require_once "../Model/Trabajador.php";
    require_once "../Model/Trabajo.php";
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    $aux2=new Trabajador("","","",$_SESSION['c']);
    $puesto=$aux2->verPuesto();
    $aux=new Trabajo(0,$_SESSION['c']);
    $total=$aux->verTrabajos();
    include "../View/trabajoPendiente_view.php";
?>