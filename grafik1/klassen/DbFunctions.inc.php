<?php

class DbFunctions {

	public static function connectWithDatabase() {
		$link = mysqli_connect('pav050.hs-bochum.de', 'wiInf', 'wiInf');
		// $link=mysqli_connect('localhost', 'wiInf', 'wiInf');
		$query = "use wiInf_Projekt";
		self::executeQuery($link, $query);
		return $link;
	}
	public static function getHash($link, $query)
{
    $result = self::executeQuery($link, $query);
    if (!$result) {
        return null;
    }
    
    $countRows = mysqli_num_rows($result);
    if ($countRows == 0) {
        return null;
    }
    
    $fieldList = array();
    $i = 1;
    while ($row = mysqli_fetch_row($result)) {
        $fieldList[$i] = $row[0];
        $i++;
    }
    
    mysqli_free_result($result);
    return $fieldList;
}
	public static function getAssociativeResultArray($link, $query) {
		$result = self::executeQuery($link, $query);
		if ($result == null || mysqli_num_rows($result) == 0) {
			return null;
		}
		$rows = mysqli_num_rows($result);
		for($i = 0; $i < $rows; $i++) {
			$resultArray [$i] = mysqli_fetch_assoc($result);
		}
		mysqli_free_result($result);
		return ($resultArray);
	}

	public static function getHashFromFirstRow($link, $query) {
		$resultArray = self::getAssociativeResultArray($link, $query);
		if (is_null($resultArray)) {
			return null;
		}
		return ($resultArray [0]);
	}

    public static function executeQuery($link, $query)
    {
        $result=mysqli_query($link, $query);
        return $result;
    }

    /*
	 * Wenn magic_qotes_gpc konfiguriert ist, werden Anführungszeichen mit Backslashes geschützt Allerdings ist die mysqli_real_escape_string noch sicherer, daher werden die Backslashes in diesem Fall wieder entfernt, damit immer die o.g. Funktion aufgerufen werden kann.
	 */
	public static function escape($link, $str) {
		if (ini_get('magic_quotes_gpc')) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($link, $str);
	}
}
?>