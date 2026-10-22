<?php
class Database {
    public static function getConnection() {
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "ikastola";

        try {
            $connection = new PDO("mysql:host=" . $server . ";dbname=" . $db, $user, $pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $e) {
            die("Conexio Errorea: " . $e->getMessage());
        }
    }
}
?>

