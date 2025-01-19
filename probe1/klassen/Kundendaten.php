<?php

require_once 'DbFunctions.inc.php';
class Kundendaten
{            
    public static function holeKundendaten($link)
    {
      $query="Select Kundennummer, Name
                from Kundendaten";
      return DbFunctions::getHash($link, $query);
    }
    
    public static function holeOrt($link, $kundennummer)
    {
        $query="Select Ort from Kundendaten where Kundennummer=$kundennummer";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    public static function holeName($link, $kundennummer)
    {
        $query="Select Name from Kundendaten where Kundennummer=$kundennummer";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

}
?>