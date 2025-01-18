<?php
class Umsatz
{
    public static function holeErloese($link)
    {
        $query = "Select Erloes from Umsatz";
        return DbFunctions::getHash($link, $query);
    }

    public static function holeErloeseDerDreiStaerkstenMonate($link)
    {
        $query = "Select Monat, Erloes
                from Umsatz
                order by Erloes desc
                limit 3";
        return DbFunctions::getHash($link, $query);
    }

    public static function holeErloeseDerStaerkstenMonate($link, $anzahl)
    {
        $query = "Select Monat, Erloes
                from Umsatz
                order by Erloes desc
                limit $anzahl";
        return DbFunctions::getHash($link, $query);
    }
}
?>