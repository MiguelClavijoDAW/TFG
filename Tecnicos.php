<?php 
require_once "coneccionDB.php";
    class Tecnicos{
        private $nombre;
        private $dni;
        private $nIncidencia;

        function __construct($nombre="",$dni="",$nIncidencia=0)
        {
            $this->nombre=$nombre;
            $this->dni=$dni;
            $this->nIncidencia=$nIncidencia;
        }

        public function getTecnicos(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT * FROM tecnicos";
            $consulta=$conexion->query($sql);
            $aux=[];
            while ($tec=$consulta->fetchObject()) {
                $aux[]=new Tecnicos($tec->nombre,$tec->dni,$tec->numero_incidencia);
            }
            return $aux;
        }
        
        //////////////////////////GETTER Y SETTER//////////////////////////////
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
         * Get the value of nIncidencia
         */ 
        public function getNIncidencia()
        {
                return $this->nIncidencia;
        }

        /**
         * Set the value of nIncidencia
         *
         * @return  self
         */ 
        public function setNIncidencia($nIncidencia)
        {
                $this->nIncidencia = $nIncidencia;

                return $this;
        }
    }
?>