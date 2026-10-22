<?php
     $prtzona1 = [
        "Izena"    => "Oscar", 
        "Abizena"  => "de Astora", 
        "NAN"       => "96731645U"
     ]; 

    $prtzona2 = [
        "Izena"    => "Radan", 
        "Abizena"  => "Karia", 
        "NAN"       => "41267267G"
    ];
?>

<table border="1">
    <thead>
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
            <th>NAN</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ([$prtzona1, $prtzona2] as $persona) { ?>
        <tr>
            <td><?= $persona["Izena"] ?></td>
            <td><?= $persona["Abizena"] ?></td>
            <td><?= $persona["NAN"] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>