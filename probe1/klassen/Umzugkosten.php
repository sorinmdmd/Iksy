<?php

class Umzugkosten
{
    public static function getKosten($arbeitszeit, $teamgrosse, $entfernung, $lastenaufzug)
    {
        if ($teamgrosse == 'klein') {
            $kosten = 59 * $arbeitszeit + 0.34 * $entfernung;
        } else if ($teamgrosse == 'mittel') {
            $kosten = 85 * $arbeitszeit + 0.34 * $entfernung;
        } else if ($teamgrosse == 'gross') {
            $kosten = 126 * $arbeitszeit + 0.34 * $entfernung;
        }

        if ($lastenaufzug == true) {
            $kosten += 75;
        }

        return $kosten;
    }
}