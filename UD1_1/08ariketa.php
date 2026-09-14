<?php
$denbora = 750;
$denbora_extra = 0;
$denetara = 10;

if ($denbora > 3) {
    $denbora_extra = $denbora - 3;
}

$denetara = $denetara + ($denbora_extra * 5);

echo($denbora."minutu; ".$denetara." zenntimo balio du.");

?>