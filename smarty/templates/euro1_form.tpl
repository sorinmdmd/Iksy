<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Euro-Dollar Umrechnung</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>Euro-Dollar Umrechnung</h2>
    <form name="euro1" action="euro1.php" method="post">
        <label for="i_kurs">Kurs</label>
        <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
        <label for="i_eurobetrag">Euros</label>
        <input type="number" name="eurobetrag" id="i_eurobetrag" size=12 step="0.01"><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
</body>
</html>