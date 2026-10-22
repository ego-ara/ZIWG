<?php
$Irteera = new DateTime('3087-12-22 06:00');
$Orain = new DateTime();
$diferentzia = $Orain ->diff($Irteera);
//diff, lortu diferentzia bi daten artean

echo $diferentzia->format('%Y-%M-%D %H:%I');

?>