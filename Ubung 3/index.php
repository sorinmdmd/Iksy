<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- helloWorld.php //-->
    <title>PHP Ubung</title>
</head>

<body>
    <?php
    echo "<h2> Salut </h2>";
    $ersterSummand = 9;
    $zweiterSummand = 10;
    $summe = $ersterSummand + $zweiterSummand;
    echo ("Die Summe von $ersterSummand und $zweiterSummand ist: $summe");
    ?>
    <br>
    <br>
    <h2>
        Addition zweier Zahlen
    </h2>
    <form name="addition" action="./addition2php.php" method="POST">
        <label for="i_ersterSummand">Erster Summand</label>
        <input type="number" name="ersterSummand" id="i_ersterSummand" size=12><br>
        <label for="i_zweiterSummand">Zweiter Summand</label>
        <input type="number" name="zweiterSummand" id="i_zweiterSummand" size=12><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
    <br>
    <br>
    <h2>
        Aufsummierung aller natürlichen Zahlen bis zu einer einzugebenden Zahl
    </h2>
    <form name="addition3" action="./addition3php.php" method="POST">
        <label for="i_bisZu">Zahl, bis zu der summiert werden soll</label>
        <input type="number" name="bisZu" id="i_bisZu" size=12><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
    <br>
    <br>
    <br>
    <?php echo ("Sorin") ?>

    <br>
    <br>
    <form action="./aufgabephp.php" method="POST" name="substraction">
        <label for="i_firstnumber">First number</label>
        <input type="number" name="firstnumber" id="i_firstnumber">
        <br>
        <label for="i_secondnumber">Second number</label>
        <input type="number" name="secondnumber" id="i_secondnumber">
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <h2>Aufgabe 4.4</h2>
    <br>
    <br>
    <form action="./aufgabe4php.php" method="POST" name="n negativ">
        <label for="i_number">N Number</label>
        <input type="number" id="i_number" name="numbernegativ">
        <button type="submit">Calculate</button>
    </form>

</body>

</html>