<?php
$x = 1;
$y = 2;
$z = 3;

if($x >= $y && $x >= $z){
    if($y >= $z){
        echo($x.",".$y.",".$z);
    }else{
        echo($x.",".$z.",".$y);
    }
    
}elseif($y >= $x && $y >= $z){
    if($x >= $z){
        echo($y.",".$x.",".$z);
    }else{
        echo($y.",".$z.",".$x);
    }
}elseif($z >= $y && $z >= $x){
    if($x >= $y){
        echo($z.",".$x.",".$y);
    }else{
        echo($z.",".$y.",".$x);
    }
}
echo("<br>");
if($x <= $y && $x <= $z){
    if($y <= $z){
        echo($x.",".$y.",".$z);
    }else{
        echo($x.",".$z.",".$y);
    }
    
}elseif($y <= $x && $y <= $z){
    if($x <= $z){
        echo($y.",".$x.",".$z);
    }else{
        echo($y.",".$z.",".$x);
    }
    
}elseif($z <= $y && $z <= $x){
    if($x <= $y){
        echo($z.",".$x.",".$y);
    }else{
        echo($z.",".$y.",".$x);
    }
    
}




?>