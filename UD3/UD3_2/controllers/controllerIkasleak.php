<?php
    require_once __DIR__ . '/../models/dao/daoIkasleak.php';
    require_once __DIR__ . '/../models/entity/Ikasleak.php';

    class controllerIkasleak{
        public function getIkasleak(){
            $dao = new daoIkasleak();
            $ikasleak = $dao->getIkasleak();
            return $ikasleak;
        }
    }
    

?>