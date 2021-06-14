<?php 
    session_start();
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    require_once "../Model/Trabajador.php";
    require_once "../Model/Trabajo.php";
    $aux=new Trabajador("","","",$_SESSION['c']);
    if($aux->verPuesto()!="Encargado"){
        header("Location: ../Index.php");
    }
    $trabajadores=Trabajador::getTrabajadores();
    include "../View/asignarTarea_view.php";
?>