<?php
    class IrudiGeometrikoa {
        //atributuak
        private $izena;
        private $kolorea;

        //eraikitzailea
        public function __construct() {
        }
        
        //getterrak
        public function getIzena() {
            return $this->izena;
        }
        public function getKolorea() {
            return $this->kolorea;
        }

        //setterrak
        public function setIzena($izena) {
            $this->izena = $izena;
        }
        public function setKolorea($kolorea) {
            $this->kolorea = $kolorea;
        }

        //metodoak
        public function idatzi() {
            echo "Izena: ".$this->izena."<br>"."Kolorea: ".$this->kolorea;
        }
    }
?>