<?php
$zenbakiak = array();

for($i=0; $i<= 9; $i++){
    $zenbakiak[$i] = random_int(0, 999);
}

rsort($zenbakiak);
echo($zenbakiak[0] . "<br>");


?>