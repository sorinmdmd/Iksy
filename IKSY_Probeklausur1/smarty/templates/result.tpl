<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Result Page</h1>
    
    <table style="border-collapse: collapse; width: auto; margin: 0 auto;">
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid black; padding: 8px;">ProjektNr</th>
            <th style="border: 1px solid black; padding: 8px;">Bezeichnung</th>
            <th style="border: 1px solid black; padding: 8px;">AufwandTage</th>
            <th style="border: 1px solid black; padding: 8px;">Kosten</th>
        </tr>
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; padding: 8px;">{$ProjektNr}</td>
            <td style="border: 1px solid black; padding: 8px;">{$Bezeichnung}</td>
            <td style="border: 1px solid black; padding: 8px;">{$AufwandTage}</td>
            <td style="border: 1px solid black; padding: 8px;">{$cost}</td>
        </tr>
    </table>
    
    <a href="index.php">Back to Form</a>
</body>
</html>