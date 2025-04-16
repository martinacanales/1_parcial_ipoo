<?php
    class Aeropuerto{
        private $denominacion;
        private $direccion;
        private $array_aerolineas; //arreglo almacena las aerolíneas que arriban a el.

        public function __construct($denominacion, $direccion)
        {
            $this->denominacion = $denominacion;
            $this->direccion = $direccion;
            $this->array_aerolineas = [];
        }

        public function getDenominacion(){
            return  $this->denominacion;
        }
        public function getDireccion(){
            return  $this->direccion;
        }
        public function getArray_aerolineas(){
            return  $this->array_aerolineas;
        }

        public function setDenominacion($denominacion){
            $this->denominacion = $denominacion;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function setArray_aerolineas($array_aerolineas){
            $this->array_aerolineas = $array_aerolineas;
        }


        public function __toString(){
            $cadena = "Denominación: ". $this->getDenominacion().("\n");
            $cadena = $cadena . "Dirección: " . $this->getDireccion().("\n");
            $cadena = $cadena . "Lista de aerolíneas: " . $this->getArray_aerolineas().("\n");
            return $cadena;
        }

        public function promedioRecaudadoXAerolinea($idAerolinea){
            

        }
    }