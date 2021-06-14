<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    if(!isset($_REQUEST['cod'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajo.php";
    $aux=new Trabajo($_REQUEST['cod'],0,0,0,$_REQUEST['estado']);
    $aux->editarEstado();
    header("Location: ../Controller/trabajoPendiente.php");
?>