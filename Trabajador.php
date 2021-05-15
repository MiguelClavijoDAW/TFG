<?php 
    require_once "coneccionDB.php";
    class Trabajador{
        private $dni;
        private $nombre;
        private $puesto;
        private $jefe;

        function __construct($dni="",$nombre="",$puesto="",$jefe=0)
        {
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->puesto=$puesto;
            $this->jefe=$jefe;           
        }

        function nuevoTrabajador(){
            $conexion=coneccionDB::connectDB();
            $sql="INSERT INTO trabajadores (dni,nombre,puesto,jefe) value ('$this->dni','$this->nombre','$this->puesto',$this->jefe)";
            $conexion->exec($sql);
        }
        public function TodosTrabajadores(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT * FROM trabajadores";
            $consulta=$conexion->query($sql);
            $aux=[];
            while ($tra=$consulta->fetchObject()) {
                $aux[]=new Trabajador($tra->dni,$tra->nombre,$tra->puesto,$tra->jefe);
            }
            return $aux;
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
         * Get the value of jefe
         */ 
        public function getJefe()
        {
                return $this->jefe;
        }

        /**
         * Set the value of jefe
         *
         * @return  self
         */ 
        public function setJefe($jefe)
        {
                $this->jefe = $jefe;

                return $this;
        }
    }
    
?>