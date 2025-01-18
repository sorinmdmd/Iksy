<?php

DEFINE('PROTAG', 750);
    
DEFINE('ADMINCOST', 0.1);
class Projektkosten{
    public static function calculateCost($tage){
        $cost = $tage * PROTAG;
        if($tage > 10){
            $cost = $cost + ($cost * ADMINCOST);
        }
        return $cost;
    }
}
?>