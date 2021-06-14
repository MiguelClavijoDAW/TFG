<?php

use Incidencia as GlobalIncidencia;

require_once "../Model/coneccionBD.php";
    class Incidencia{

        private $codigo;
        private $codigo_trabajador;
        private $titulo;
        private $descripcion;
        private $estado;
        private $codigo_tecnico;

        function __construct($codigo=0, $codigo_trabajador=0,$titulo="",$descripcion="",$estado="",$codigo_tecnico=0)
        {
            $this->codigo=$codigo;
            $this->codigo_trabajador=$codigo_trabajador;
            $this->titulo=$titulo;
            $this->descripcion=$descripcion;
            $this->estado=$estado;
            $this->codigo_tecnico=$codigo_tecnico;
        }

        function incidenciaTrabajador(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT * FROM incidencia WHERE codigo_trabajador=$this->codigo_trabajador";
            $consulta=$conexion->query($sql);
            $aux=[];
            while ($item=$consulta->fetchObject()) {
                $aux[]=new Incidencia($item->codigo,$item->codigo_trabajador,$item->titulo,$item->descripcion,$item->estado,$item->codigo_tecnico);
            }
            return $aux;
        }
        
        function guardarIncidencia(){
            $conexion=coneccionDB::connectDB();
            $sql="INSERT INTO incidencia (codigo_trabajador,titulo,descripcion,estado) VALUE ($this->codigo_trabajador,'$this->titulo','$this->descripcion','PENDIENTE')";
            $conexion->exec($sql);
        }

        function eliminarIncidencia(){
            $conexion=coneccionDB::connectDB();
            $sql="DELETE FROM incidencia WHERE codigo=$this->codigo";
            $conexion->exec($sql);
        }

        public static function getIncidencias(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT * FROM incidencia";
                $consulta=$conexion->query($sql);
                $aux=[];
                while ($item=$consulta->fetchObject()) {
                        $aux[]=new GlobalIncidencia($item->codigo,$item->codigo_trabajador,$item->titulo,$item->descripcion,$item->estado,$item->codigo_tecnico);
                }
                return $aux;
        }
        function solucionarIncidencia(){
                $conexion=coneccionDB::connectDB();
                $sql="UPDATE incidencia SET estado='$this->estado',codigo_tecnico=$this->codigo_tecnico WHERE codigo=$this->codigo";
                $conexion->exec($sql);
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

        /**
         * Get the value of codigo_trabajador
         */ 
        public function getCodigo_trabajador()
        {
                return $this->codigo_trabajador;
        }

        /**
         * Set the value of codigo_trabajador
         *
         * @return  self
         */ 
        public function setCodigo_trabajador($codigo_trabajador)
        {
                $this->codigo_trabajador = $codigo_trabajador;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of codigo_tecnico
         */ 
        public function getCodigo_tecnico()
        {
                return $this->codigo_tecnico;
        }

        /**
         * Set the value of codigo_tecnico
         *
         * @return  self
         */ 
        public function setCodigo_tecnico($codigo_tecnico)
        {
                $this->codigo_tecnico = $codigo_tecnico;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }
    }
?>