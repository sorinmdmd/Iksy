<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe php</title>
</head>
<body>
    <?php   
    $firstnumber = $_POST["firstnumber"];
    $secondnumber = $_POST["secondnumber"];
    $result = $firstnumber - $secondnumber;
    echo $result;
    ?>
    <br>
    <br>
    
</body>
</html>