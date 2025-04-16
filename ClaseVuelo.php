<?php
    class Vuelo{
        private $numero;
        private $importe;
        private $fecha;
        private $destino;
        private $hora_arribo;
        private $hora_part;
        private $cant_as_dispo;
        private $cant_as_total;

        public function __construct($numero, $importe, $fecha, $destino, $hora_arribo, $hora_part, $cant_as_dispo, $cant_as_total){
            $this->numero = $numero;
            $this->importe = $importe;
            $this->fecha = $fecha;
            $this->destino = $destino;
            $this->hora_arribo = $hora_arribo;
            $this->hora_part = $hora_part;
            $this->cant_as_dispo = $cant_as_dispo;
            $this->cant_as_total = $cant_as_total;
        }

        //getters y setters
        public function getNumero(){
            return  $this->numero;
        }
        public function getImporte(){
            return  $this->importe;
        }
        public function getFecha(){
            return  $this->fecha;
        }
        public function getDestino(){
            return  $this->destino;
        }
        public function getHora_arribo(){
            return  $this->hora_arribo;
        }
        public function getHora_part(){
            return  $this->hora_part;
        }
        public function getCant_as_dispo(){
            return  $this->cant_as_dispo;
        }
        public function getCant_as_total(){
            return  $this->cant_as_total;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }
        public function setImporte($importe){
            $this->importe = $importe;
        }
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function setDestino($destino){
            $this->destino = $destino;
        }
        public function setHora_arribo($hora_arribo){
            $this->hora_arribo = $hora_arribo;
        }
        public function setHora_part($hora_part){
            $this->hora_part = $hora_part;
        }
        public function setCant_as_dispo($cant_as_dispo){
            $this->cant_as_dispo = $cant_as_dispo;
        }
        public function setCant_as_total($cant_as_total){
            $this->cant_as_total = $cant_as_total;
        }

        //método me permite saber si hay asientos disponibles
        public function asignarAsientosDisponibles($cantPasajeros){
            $disponibles = false;
            $cantDisponibles =  $this->getCant_as_dispo();
            if($cantPasajeros <= $cantDisponibles){
                $disponibles = true;
            }
          return $disponibles;  
        }

        public function __toString(){
            $cadena = "Número de vuelo: " . $this->getNumero().("\n");
            $cadena = $cadena . "Importe del vuelo: " . $this->getImporte().("\n");
            $cadena = $cadena . "Fecha del vuelo: " . $this->getFecha().("\n");
            $cadena = $cadena . "Destino de viaje: ". $this->getDestino().("\n");
            $cadena = $cadena . "Hora de partida: ". $this->getHora_part(). ("\n");
            $cadena = $cadena . "Hora de arribo: ". $this->getHora_arribo().("\n");
            $cadena = $cadena . "Cantidad de asientos disponibles: ". $this->getCant_as_dispo().("\n");
            $cadena = $cadena . "Cantidad de asientos totales: ". $this->getCant_as_total().("\n");
            return $cadena;
        }
    }