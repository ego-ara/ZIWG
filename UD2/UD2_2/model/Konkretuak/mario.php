<?php
    namespace UD2_2\model\Konkretuak;
    use UD2_2\interfazeak\salto;
    require_once 'UD2_2\model\Abstraktuak\pertsonaia.php';
    include("pertsonaia.php");

    class mario extends pertsonaia implements salto{
        private ?string $gaitasunBerezia;
    

        public function __construct(
            ?string $izena = null, 
            int $biziPuntuak = 0, 
            int $indarra = 0, 
            int $arintasuna = 0,  
            string $gaitasunBerezia = null
            ) {
            parent::__construct(
                $izena, 
                $biziPuntuak, 
                $indarra, 
                $arintasuna
                );
            $this->gaitasunBerezia = $gaitasunBerezia;
        }

        public function mugitu(): string {
            return "Mario mugitu da";
        }

        public function erasoEgin(): int {
            return $this->indarra;
        }

        public function saltoEgin(): int {
            return $this->indarra * $this->arintasuna;
        }

    }


?>