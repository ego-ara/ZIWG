<?php
require_once 'IrudiGeometrikoa.php';
class Triangelua extends IrudiGeometrikoa
{
    //atributuak
    private $oinarria;
    private $altuera;

    //eraikitzailea
    public function __construct()
    {
        parent::__construct();

    }

    //getterrak
    public function getOinarria()
    {
        return $this->oinarria;
    }
    public function getAltuera()
    {
        return $this->altuera;
    }

    //setterrak
    public function setOinarria($oinarria)
    {
        $this->oinarria = $oinarria;
    }
    public function setAltuera($altuera)
    {
        $this->altuera = $altuera;
    }

    //metodoak

    public function idatzi()
    {
        parent::idatzi();
        echo "<br>Oinarria: " . $this->oinarria . "<br>Altuera: " . $this->altuera;
    }

    public function area()
    {
        echo "<br>Area: " . ($this->oinarria * $this->altuera) / 2;

    }
}
?>