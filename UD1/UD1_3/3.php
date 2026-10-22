<?php
$bikoti = isset($_GET['bikoti']) ? $_GET['bikoti'] : "";//buleano
$balio1 = rand(1,99);
$balio2 = rand(1,99);

if($bikoti == ""){
    ?>
    <script>
        var bakoit;//buleano
        do{
            var erantzuna = prompt("Bikoitiak nahi badituzu, true, beztela false.");
            if (erantzuna == "true" && (erantzuna == "false") {
                bakoit = erantzuna.trim().toLowerCase();//pasa el string de erantzuna a boolean
            }
        }while (bakoit != true && bakoit != false);

        window.location.href = "?bikoti=" + encodeURIComponent(bakoit);
    </script>
    <?php
}
echo $bikoti

?>