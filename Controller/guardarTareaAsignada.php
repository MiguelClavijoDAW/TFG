<?php 
    session_start();
    require_once "../Model/Trabajador.php";
    require_once "../Model/Trabajo.php";
    if(!isset($_SESSION['c'])){
        header("Location: ../Index.php");
    }
    $aux=new Trabajo(0,$_REQUEST["trabajador"],$_SESSION['c'],$_REQUEST['tarea'],$_REQUEST['estado'],$_REQUEST['fechaMax'],"");
    if($aux->getCod_trabajador()==0){
        include "../View/errorInicio_view.php";
    }else{
       $aux->guardarTarea();
        include "../View/verificacio_view.php"; 
    }
    
?>