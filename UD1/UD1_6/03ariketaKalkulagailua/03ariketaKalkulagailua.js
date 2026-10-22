/**
 * Eremu behartuak beteta dauden egiaztatzen duen funtzioa.
 * 'true' itzultzen badu, datuak '03ariketaKalkulagailua.php' fitxategira bidaltzen dira.
 * 'false' itzultzen badu, bidalketa gelditu egiten da.
 */
function eremuakBalioztatu() {
    // Formularioaren testu-koadroak jaso
    var sarrera1 = document.getElementById('zenb1');
    var sarrera2 = document.getElementById('zenb2');

    // .trim() funtzioak hutsuneak garbitzen ditu benetako egiaztapena egiteko
    if (sarrera1.value.trim() === "" || sarrera2.value.trim() === "") {
        // Bi koadroetako bat hutsik badago, abisu-mezu hau erakutsiko da euskaraz
        alert("Mesedez, bete bi eremuak. Biak derrigorrezkoak dira.");
        return false; // PHP-rako bidalketa erabat gelditzen du
    }
    
    return true; // Datuak backend-era (PHP) bidaltzeko baimena ematen du
}
