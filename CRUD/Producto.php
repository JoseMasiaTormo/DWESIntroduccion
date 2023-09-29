<?php  
    class Producto {
        private int $id;
        private string $nombre;
        private string $descripcion;

        public function __construct($id, $nombre, $descripcion) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return $this;
        }
        
        public function getDescripcion()
        {
            return $this->descripcion;
        }
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
            return $this;
        }
    }
?>