<form action="" method="post">
    <label for="">Erabiltzailea</label>
    <input type="text" name="erabiltzailea" id="">
    <br><br>
    <label for="">Pasahitza</label>
    <input type="password" name="pasahitza" id="">
    <br><br>
    <button type="submit">Sahioa hazi</button>
</form>


<?php
    $user = isset($_POST['erabiltzailea']) ? $_POST['erabiltzailea'] : '';
    $password = isset($_POST['pasahitza']) ? $_POST['pasahitza'] : '';

    echo "Usuario introducido: " . $user;
    
?>