<?php
// Recogemos los valores de la URL si existen, si no, se quedan vacíos
$balio1 = isset($_GET['balio1']) ? $_GET['balio1'] : "";
$balio2 = isset($_GET['balio2']) ? $_GET['balio2'] : "";

// SI $balio1 ESTÁ VACÍO O $balio2 ESTÁ VACÍO, METEMOS EL JAVASCRIPT
if ($balio1 === "" && $balio2 === "" ) {
    ?>
    <script>
        // Pedimos el primer valor
        do {
            var b1 = prompt("Sartu 1. balioa (Introduce el primer valor):");
        } while (b1 === "" || b1 === null);

        // Pedimos el segundo valor
        do {
            var b2 = prompt("Sartu 2. balioa (Introduce el segundo valor):");
        } while (b2 === "" || b2 === null);

        // UNA SOLA REDIRECCIÓN al final con ambos valores
        window.location.href = "?balio1=" + encodeURIComponent(b1) + "&balio2=" + encodeURIComponent(b2);
    </script>
    <?php
}

// Si ya no están vacíos (porque se redireccionó la página), mostramos el resultado
if ($balio1 !== "" && $balio2 !== "") {
    $zenbaki_kopurua = abs($balio1 - $balio2) + 1;

    

    echo ($balio1+$balio2)*$zenbaki_kopurua;

}
?>
