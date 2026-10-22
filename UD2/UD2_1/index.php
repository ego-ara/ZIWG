<?php
    require_once 'IrudiGeometrikoa.php';
    require_once 'Triangelua.php';

    $irudi = new IrudiGeometrikoa();
    $irudi->setIzena("A");
    $irudi->setKolorea("urdina");
    $irudi->idatzi();

    Echo "<br><br>";

    $triangelua = new Triangelua();
    $triangelua->setIzena("B");
    $triangelua->setKolorea("berdea");
    $triangelua->setOinarria(3);
    $triangelua->setAltuera(5);
    $triangelua->idatzi();
    $triangelua->area();
?>