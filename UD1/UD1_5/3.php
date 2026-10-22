<?php
// 1. Array asoziatiboa sortu eta balioak esleitu
$asteko_egunak = array(
    "Astelehena" => 1,
    "Asteartea" => 2,
    "Asteazkena" => 3,
    "Osteguna" => 4,
    "Ostirala" => 5,
    "Larunbata" => 6,
    "Igandea" => 7
);

$batura = 0;
$egun_kopurua = count($asteko_egunak);

/*for($i = 0; $i < $egun_kopurua; $i++) {
    $batura += array_values($asteko_egunak)[$i];

}*/

foreach ($asteko_egunak as $eguna => $balioa) {
    echo "$eguna: $balioa\n";
    $batura += $balioa;
}
$batezbestekoa = $batura / $egun_kopurua;

echo "<br>";
echo "Balio guztien batura: ".$batura;
echo " Balio guztien batezbestekoa: " . round($batezbestekoa, 2) . "\n";
?>
