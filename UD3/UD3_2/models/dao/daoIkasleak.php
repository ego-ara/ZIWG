<?php
require_once __DIR__ . '/../entity/Ikasleak.php';
require_once __DIR__ . '/../config/Database.php';

class daoIkasleak{
    
    
    public function getIkasleak(){
        $sqlGET = "SELECT * FROM `ikasleak`";
        
        try {
        $con  = Database::getConnection();
        $stmt = $con->prepare($sqlGET);
        $stmt->execute();

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            // Crea el objeto mapeando las columnas de tu BD
            $id = $row['id'];
            $izena = $row['izena'];
            $email = $row['email'];
            $ikaslea = new ikasleak($id, $izena, $email);
            $ikasleak[] = $ikaslea;
        }

        } catch (\Exception $e) {
            error_log("Error al seleccionar ikasleak: " . $e->getMessage());
        }

        return $ikasleak;
    }
}
