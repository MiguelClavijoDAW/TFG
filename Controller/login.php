<?php
    session_start();
    if(isset($_SESSION["c"])){
        session_destroy();
    }
    require_once "../Model/Trabajador.php";
    if(isset($_REQUEST['usuario'])){
        $result=Trabajador::loginUsuario($_REQUEST['usuario'],$_REQUEST['pass']);
        if($result==false){
            include "../View/errorInicio_view.php";
                   
        }else{
            header("Location: ../Controller/home.php?c=".$result);
        }
    }else{
        $aux=Trabajador::getLogin();
        include "../View/login_view.php";
    }
    
