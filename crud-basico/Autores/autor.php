<?php
    class Autor{
        private $id;
        private $nombre;
        private $direccion;
        private $rh;
        private $correo;
        private $telefono;
        private $pais;
        private $ciudad;

        function __construct(){}
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getRh(){
            return $this->rh;
        }
        public function setRh($rh){
            $this->rh = $rh;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function getPais(){
            return $this->pais;
        }
        public function setPais($pais){
            $this->pais = $pais;
        }
        public function getCiudad(){
            return $this->ciudad;
        }
        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }
        
    }
?>