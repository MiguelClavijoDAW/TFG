<?php 
    require_once "../Model/coneccionBD.php";
    class Trabajador{
        private $dni;
        private $nombre;
        private $puesto;
        private $codigo;

        function __construct($dni="",$nombre="",$puesto="",$codigo=0)
        {
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->puesto=$puesto;   
            $this->codigo=$codigo;      
        }

        function nuevoTrabajador(){
            $conexion=coneccionDB::connectDB();
            $sql="INSERT INTO trabajadores (dni,nombre,puesto) value ('$this->dni','$this->nombre','$this->puesto')";
            $conexion->exec($sql);
        }
        public function TodosTrabajadores(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT * FROM trabajadores";
            $consulta=$conexion->query($sql);
            $aux=[];
            while ($tra=$consulta->fetchObject()) {
                $aux[]=new Trabajador($tra->dni,$tra->nombre,$tra->puesto);
            }
            return $aux;
        }
        
        function generarUsuario(){
               $aux=explode(" ",$this->nombre); 
               $usuario=$aux[0][0].$aux[1][0].$aux[2];
               $usuario=strtolower($usuario);
               $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
                $clave = "";
                for($i=0;$i<10;$i++) {
                        $clave .= substr($str,rand(0,62),1);
                }
               $conexion=coneccionDB::connectDB();
               $quer="SELECT codigo FROM trabajadores WHERE dni='$this->dni'";
               $consulta=$conexion->query($quer);
               $codigo=$consulta->fetchObject();
               $sql="INSERT INTO login (codigo,usuario,clave) VALUE ('$codigo->codigo','$usuario','$clave')";
               $conexion->exec($sql);
               $aux=[$usuario,$clave];
                return $aux;
        }

        public static function loginUsuario($usu , $pass){
               $conexion=coneccionDB::connectDB();
               $sql="SELECT codigo FROM login WHERE usuario='$usu'and clave='$pass'";
               $consulta=$conexion->query($sql);
               $codigo=$consulta->fetchObject();
               if($codigo->codigo==null){
                       return false;
               }else{
                       return $codigo->codigo;
               }
        }

        function verPuesto(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT puesto FROM trabajadores WHERE codigo=".$this->codigo;
                $consulta=$conexion->query($sql);
                $x=$consulta->fetchObject();
                $resultado=$x->puesto;
                return $resultado;
        }
        public static function getTrabajadores(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT * FROM trabajadores WHERE puesto='Trabajador' or puesto='Encargado'";
                $consulta=$conexion->query($sql);
                $aux=[];
                while ($item=$consulta->fetchObject()) {
                        $aux[]=new Trabajador($item->dni,$item->nombre,$item->puesto,$item->codigo);
                }
                return $aux;
        }

        public static function getLogin(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT * FROM login";
                $consulta=$conexion->query($sql);
                if($consulta->fetchObject()==""){
                        return true;
                }else{
                        return false;
                }
        }

        function tenerNombre(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT nombre FROM trabajadores WHERE codigo=".$this->codigo;
                $consulta=$conexion->query($sql);
                $x=$consulta->fetchObject();
                $resultado=$x->nombre;
                return $resultado;
        }
        function cambiarClave($x){
                $conexion=coneccionDB::connectDB();
                $sql="UPDATE login SET clave='$x' WHERE codigo=".$this->codigo;
                $consulta=$conexion->exec($sql);
        }
        

        /////////////////////////////GETTER Y SETTER////////////////////////////////////
        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         *
         * @return  self
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of puesto
         */ 
        public function getPuesto()
        {
                return $this->puesto;
        }

        /**
         * Set the value of puesto
         *
         * @return  self
         */ 
        public function setPuesto($puesto)
        {
                $this->puesto = $puesto;

                return $this;
        }

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */ 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }
    }
