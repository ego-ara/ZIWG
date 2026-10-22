<?php
$izena = !empty($_POST["nombre"]) ? $_POST["nombre"] : "";
$abizena = !empty($_POST["apellidos"]) ? $_POST["apellidos"] : "";
$adina = !empty($_POST["edad"]) ? $_POST["edad"] : "";
$pisua = !empty($_POST["peso"]) ? $_POST["peso"] : "";
$genero = !empty($_POST["sexo"]) ? $_POST["sexo"] : "";
$zibil = !empty($_POST["estado_civil"]) ? $_POST["estado_civil"] : "";
$afizioak = isset($_POST['aficiones']) && is_array($_POST['aficiones']) ? $_POST['aficiones'] : [];


echo "Izena: ",$izena,"<br>";
echo "Abizena: ",$abizena,"<br>";
echo "Adina: ",$adina,"<br>";
echo "Pisua: ",$pisua,"<br>";
echo "Generoa: ",$genero,"<br>";
echo "Egoera zibila: ",$zibil,"<br>";
echo "Zaletasunak: " . implode(", ", $afizioak) . "<br>";


?>