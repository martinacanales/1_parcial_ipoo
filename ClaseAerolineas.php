<?php
    class Aerolineas{
        private $identificacion;
        private $nombre;
        private $array_vuelos_prog; //arreglo guarda vuelos programados

        public function __construct($identificacion, $nombre, $array_vuelos_prog){
            $this->identificacion = $identificacion;
            $this->nombre = $nombre;
            $this->array_vuelos_prog = $array_vuelos_prog;
        }

        public function getIdentificacion(){
            return $this->identificacion;
        }
        public function getNombre(){
            return  $this->nombre;
        }
        public function getArray_vuelos_prog(){
            return  $this->array_vuelos_prog;
        }

        public function setIdentificacion($identificacion){
            $this->identificacion = $identificacion;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setArray_vuelos_prog($array_vuelos_prog){
            $this->array_vuelos_prog = $array_vuelos_prog;
        }

        public function __toString(){
            $cadena = "Identificación: " . $this->getIdentificacion().("\n");
            $cadena = $cadena . "Nombre: ". $this->getNombre().("\n");
            $cadena = $cadena . "Vuelos programados: " . $this->getArray_vuelos_prog().("\n");
            return $cadena;
        }
    }