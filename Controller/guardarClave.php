<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajador.php";
    $aux=new Trabajador("","","",$_SESSION['c']);
    $aux->cambiarClave($_REQUEST['pass']);
    include "../View/verificacio_view.php";
?>