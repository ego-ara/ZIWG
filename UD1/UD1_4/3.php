<?php
$erab1 = array("Azendado Oinetakoa","Kamiotik jausitako oinetakoa","Piratas du brazil oinetakoak", "CJ-rez oinetakoak", "CJ-rez oinetakoak pipero edizioan");
$erab2 = array("985000","985000000","985000000000","985000000000000","985000000000000000");
$beherapena = 20;

for ($i = 0; $i < count($erab2); $i++) {
    $erab2[$i] = $erab2[$i]*$beherapena/100;
}



for ($i = 0; $i < count($erab1); $i++) {
    echo $erab1[$i];
    echo " ";
    echo $erab2[$i]."€";
    echo "<br>";
}


?>