<?php 
    require_once "../Model/Trabajador.php";
    if(!isset($_REQUEST['dni'])){
        header("Location: ../Index.php");
    }
        switch ($_REQUEST['puesto']) {
            case 1:
                $puesto="Trabajador";
                break;
            case 2:
                $puesto="Encargado";
                break;
            case 3:
                $puesto="Tecnico";
                break;
            case 4:
                $puesto="Administrador";
                break;
            
            default:
                $puesto = "error";
                break;
        }
        if($puesto=="error"){
            include "../View/errorInicio_view.php";
        }else{
            $trabajador=new Trabajador($_REQUEST['dni'],$_REQUEST['nombre'],$puesto);
            $trabajador->nuevoTrabajador();
            $registro=$trabajador->generarUsuario();
            include "../View/mostrarUsuariCreado_View.php";
        }
        
?>