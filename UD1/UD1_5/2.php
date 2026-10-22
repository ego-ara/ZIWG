<?php
$hilabeteak = [
    "Urtarrila" => 31,
    "Otsaila"   => 28,
    "Apirila"   => 30,
    "Maiatza"   => 31,
    "Ekaina"    => 30,
    "Uztaila"   => 31,
    "Abuztua"   => 31,
    "Iraila"    => 30,
    "Urria"     => 31,
    "Azaroa"    => 30,
    "Abendua"   => 31
];
?>


<table border="1">
    <tr>
        <th>Hilabetea</th>
        <th>Egun kopurua</th>
    </tr>
    <?php 
    foreach ($hilabeteak as $izena => $egunak) { 
    ?>
        <tr>
            <td><?= $izena ?></td>
            <td><?= $egunak ?> egun</td>
        </tr>
    <?php } ?>
</table>
