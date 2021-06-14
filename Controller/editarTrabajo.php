<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajo.php";
    $aux=new Trabajo($_REQUEST['codigo']);
    $tarea=$aux->getTrabajo();
    include "../View/editarTarea_view.php";
?>