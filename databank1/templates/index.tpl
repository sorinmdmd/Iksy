<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- datenbankZugriffRaum -->
    <title>Datenbankzugriff Raum</title>
</head>
<body>
    <h2>Zur Zeit sind folgende Räume in der Datenbank:</h2>
    <table border="0">
        <tr>
            <th>Raumnummer</th>
            <th>Name</th>
        </tr>
        {foreach item=name key=raumNr from=$raumHash}
        <tr>
            <td>{$raumNr}</td>
            <td>{$name}</td>
        </tr>
        {/foreach}
    </table>
</body>
</html>