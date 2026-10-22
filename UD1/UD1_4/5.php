<?php
$zenbakiak = array();

for($i=0; $i<= 9; $i++){
    $zenbakiak[$i] = random_int(0, 99);
}

rsort($zenbakiak);
echo($zenbakiak[9] . "<br>");


?>