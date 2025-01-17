<?php

class Projekt {
    public static function getProject($link, $nummer) {
        $query = "SELECT * FROM Projekt where ProjektNr=$nummer;";
        $result = DbFunctions::getAssociativeResultArray($link, $query);
        return $result;
    }
}

?>