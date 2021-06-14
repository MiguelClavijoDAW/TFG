<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajo.php";
    $aux=new Trabajo($_REQUEST['codigo']);
    $aux->eliminarTarea();
    include "../View/verificacio_view.php";
?>