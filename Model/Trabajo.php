<?php 
    require_once "../Model/coneccionBD.php";
    class Trabajo{
        private $codigo;
        private $cod_trabajador;
        private $cod_jefe;
        private $tarea;
        private $estado;
        private $fecha_max;
        private $fecha;

        function __construct($codigo=0,$cod_trabajador=0,$cod_jefe=0,$tarea="",$estado="", $fecha_max="",$fecha="")
        {
            $this->codigo=$codigo;
            $this->cod_trabajador=$cod_trabajador;
            $this->cod_jefe=$cod_jefe;
            $this->tarea=$tarea;
            $this->estado=$estado;
            $this->fecha_max=$fecha_max;
            $this->fecha=$fecha;
        }

        function verTrabajos(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT * FROM trabajo WHERE codigo_trabajador=".$this->cod_trabajador;
            $consulta=$conexion->query($sql);
            $aux=[];
            while ($item=$consulta->fetchObject()) {
                $aux[]=new Trabajo($item->codigo,$item->codigo_trabajador,$item->codigo_jefe,$item->tarea,$item->estado,$item->fecha_max,$item->fecha);
            }
            return $aux;
        }

        function getTrabajo(){
            $conexion=coneccionDB::connectDB();
            $sql="SELECT codigo,codigo_trabajador,codigo_jefe,tarea,estado,fecha_max,fecha FROM trabajo WHERE codigo=".$this->codigo;
            $consulta=$conexion->query($sql);
            $x=$consulta->fetchObject();
            $aux=new Trabajo($x->codigo,$x->codigo_trabajador,$x->codigo_jefe,$x->tarea,$x->estado,$x->fecha_max,$x->fecha);
            return $aux;    
        }

        function getJefe(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT codigo_jefe FROM trabajo WHERE codigo=".$this->codigo;
                $consulta=$conexion->query($sql);
                $x=$consulta->fetchObject();
                $co=$x->codigo_jefe;
                $sql2="SELECT nombre FROM trabajadores WHERE codigo=".$co;
                $consulta2=$conexion->query($sql2);
                $aux=$consulta2->fetchObject();
                return $aux->nombre;
        }

        function editarEstado(){
                $conexion=coneccionDB::connectDB();
                $sql="UPDATE trabajo SET estado='".$this->estado."' WHERE codigo=".$this->codigo;
                $conexion->exec($sql);
        }

        function guardarTarea(){
                $conexion=coneccionDB::connectDB();
                $this->fecha=date('Y-m-d');
                $sql="INSERT INTO trabajo (codigo_trabajador,codigo_jefe,tarea,estado,fecha_max,fecha) VALUE ($this->cod_trabajador, $this->cod_jefe, '$this->tarea', '$this->estado', '$this->fecha_max', '$this->fecha')";
                $conexion->exec($sql);
        }

        function tareaAsignada(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT * FROM trabajo where codigo_jefe=$this->cod_jefe";
                $consulta=$conexion->query($sql);
                $aux=[];
                while ($item=$consulta->fetchObject()) {
                        $aux[]=new Trabajo($item->codigo,$item->codigo_trabajador,$item->codigo_jefe,$item->tarea,$item->estado,$item->fecha_max,$item->fecha);
                }
                return $aux;
        }

        function eliminarTarea(){
                $conexion=coneccionDB::connectDB();
                $sql="DELETE FROM trabajo WHERE codigo=$this->codigo";
                $conexion->exec($sql);
        }

        function verTrabajador(){
                $conexion=coneccionDB::connectDB();
                $sql="SELECT codigo_trabajador FROM trabajo where codigo=$this->codigo";
                $consulta=$conexion->query($sql);
                $resul=$consulta->fetchObject();
                return $resul->codigo_trabajador;
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
         * Get the value of cod_trabajador
         */ 
        public function getCod_trabajador()
        {
                return $this->cod_trabajador;
        }

        /**
         * Set the value of cod_trabajador
         *
         * @return  self
         */ 
        public function setCod_trabajador($cod_trabajador)
        {
                $this->cod_trabajador = $cod_trabajador;

                return $this;
        }

        /**
         * Get the value of cod_jefe
         */ 
        public function getCod_jefe()
        {
                return $this->cod_jefe;
        }

        /**
         * Set the value of cod_jefe
         *
         * @return  self
         */ 
        public function setCod_jefe($cod_jefe)
        {
                $this->cod_jefe = $cod_jefe;

                return $this;
        }

        /**
         * Get the value of tarea
         */ 
        public function getTarea()
        {
                return $this->tarea;
        }

        /**
         * Set the value of tarea
         *
         * @return  self
         */ 
        public function setTarea($tarea)
        {
                $this->tarea = $tarea;

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
         * Get the value of fecha_max
         */ 
        public function getFecha_max()
        {
                return $this->fecha_max;
        }

        /**
         * Set the value of fecha_max
         *
         * @return  self
         */ 
        public function setFecha_max($fecha_max)
        {
                $this->fecha_max = $fecha_max;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }
    }
?>