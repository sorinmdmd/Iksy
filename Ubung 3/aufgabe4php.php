<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = $_POST['numbernegativ'];
    $result = 0;
    for ($i = 0; $i > $number; $i--) {
        $result = $result - $i;
    }

    echo $result;
    ?>
    <br>
    <br>
    <!-- Ohne Schleife -->
    <?php
    $number = $_POST['numbernegativ'];
    $summe = 0;
    $summe = ($number * ($number + 1)) / 2;
    echo $summe;
    ?>
</body>

</html>