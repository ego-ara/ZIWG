<?php
    namespace UD2_2\model\Abstraktuak;

    abstract  class pertsonaia{
        //atributuak
        private ?string $izena;
        private int $biziPuntuak;
        private int $indarra;
        private int $arintasuna;

        //eraikitzailea
        public function __construct(
            ?string $izena = null, 
            int $biziPuntuak = 0, 
            int $indarra = 0, 
            int $arintasuna = 0
        ) {
            $this->izena = $izena;
            $this->biziPuntuak = $biziPuntuak;
            $this->indarra = $indarra;
            $this->arintasuna = $arintasuna;
        }

        public function getIzena(): string {
        return $this->izena;
        }

        //getters eta setters
        public function setIzena(string $izena): void {
            $this->izena = $izena;
        }

        public function getBiziPuntuak(): int {
            return $this->biziPuntuak;
        }

        public function setBiziPuntuak(int $biziPuntuak): void {
            $this->biziPuntuak = $biziPuntuak;
        }

        public function getIndarra(): int {
            return $this->indarra;
        }

        public function setIndarra(int $indarra): void {
            $this->indarra = $indarra;
        }

        public function getArintasuna(): int {
            return $this->arintasuna;
        }


        //klaseaka
        abstract public function mugitu(): string;
        abstract public function erasoEgin(): int;
        public function minaJaso(int $mina): void {
            if(getBiziPuntuak() - $mina < 0){
                setBiziPuntuak(0);
            }else{
                setBiziPuntuak(getBiziPuntuak() - $mina);
            }
        }
      
    }
?>