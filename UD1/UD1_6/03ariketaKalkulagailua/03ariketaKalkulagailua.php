<?php
    $eragiketa;
    $zenbakia1;
    $zenbakia2;

    function bueltatu(){
        echo '<button onclick="window.history.back();">Bueltatu</button>';
    }

    if(isset($_POST['eragiketa']) && isset($_POST['zenb1']) && isset($_POST['zenb2'])){
        $eragiketa = $_POST['eragiketa'];
        $zenbakia1 = $_POST['zenb1'];
        $zenbakia2 = $_POST['zenb2'];
    }else{
        echo "Ez dituzu bete parametro guztiak <br>";
        bueltatu();
        exit;
    }
    
    if($_POST['zenb1'] === "" || $_POST['zenb2'] === ""){
        echo "Ez dituzu bete parametro guztiak <br>";
        bueltatu();
        exit;
    }

    if(filter_var($zenbakia1, FILTER_VALIDATE_INT) === false || filter_var($zenbakia2, FILTER_VALIDATE_INT) === false){
        echo "Ez dituzu bete parametro guztiak <br>";
        bueltatu();
        exit;
    }

    if($eragiketa === "batuketa"){
        echo "Batuketa: ", $zenbakia1 + $zenbakia2, "<br>";
    }elseif($eragiketa === "kenketa"){
        echo "Kenketa: ", $zenbakia1 - $zenbakia2, "<br>";
    }elseif($eragiketa === "biderkaketa"){
        echo "Biderketa: ", $zenbakia1 * $zenbakia2, "<br>";
    }elseif($eragiketa === "zatiketa"){
        echo "Zatiketa: ";
        if($zenbakia2 == 0){
            echo "0";
        }else{
            echo  $zenbakia1 / $zenbakia2;
        }
        echo "<br>";
    }else{
        echo "Zer egin duzu?", "<br>";
    }
    bueltatu();

?>