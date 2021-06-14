<?php 
    session_start();
    require_once "../Model/Trabajador.php";
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }else{
        $aux=new Trabajador("","","",$_SESSION["c"]);
        $puesto=$aux->verPuesto();
        if($puesto!="Administrador"){
            header("Location: ../Index.php");
        }
    }
    include "../View/crearUsuario_view.php";
?>