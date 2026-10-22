<?php
$x = -5;
$y = 0;
$z = 0;

//komprobatu X baldin baden aundiena
if($x >= $y && $x >= $z){
    //komprobatu Y eta Z artean zein den aundiena
    if($y >= $z){
        echo("1.aukera"."<br>".$x.",".$y.",".$z."<br>".$z.",".$y.",".$x);
    }else{
        echo("2.aukera"."<br>".$x.",".$z.",".$y."<br>".$y.",".$z.",".$x);
    }
    
//komprobatu y baldin baden aundiena
}elseif($y >= $x && $y >= $z){
    //komprobatu X eta Z artean zein den aundiena
    if($x >= $z){
        echo("3.aukera"."<br>".$y.",".$x.",".$z."<br>".$z.",".$x.",".$y);
    }else{
        echo("4.aukera"."<br>".$y.",".$z.",".$x."<br>".$x.",".$z.",".$y);
    }

//komprobatu z baldin baden aundiena
}elseif($z >= $y && $z >= $x){
    //komprobatu X eta Y artean zein den aundiena
    if($x >= $y){
        echo("5.aukera"."<br>".$z.",".$x.",".$y."<br>".$y.",".$x.",".$z);
    }else{
        echo("6.aukera"."<br>".$z.",".$y.",".$x."<br>".$x.",".$y.",".$z);
    }
}
?>