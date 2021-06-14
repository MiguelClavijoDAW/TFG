<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        if(!isset($_REQUEST['c'])){
            header("Location: ../Index.php");
        }else{
            $_SESSION['c']=$_REQUEST['c'];
        }
    }
    require_once "../Model/Trabajador.php";
    $aux=new Trabajador("","","",$_SESSION['c']);
    $nombre=$aux->tenerNombre();
    $_SESSION['nom']=$nombre;
    $puesto=$aux->verPuesto();
    include "../View/home_view.php";
?>