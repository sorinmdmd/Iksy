<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probeklausur 2</title>
</head>
<body>
    <h1>{$ueberschrift}</h1>

    <br>
    {if (isset($PHP_SELF))}
    <form method="POST" action="{$PHP_SELF}">
        <input type="hidden" name="csrf_token" value="{$csrf_token}"/>
        <label for="kundennummer">Kundennummer:</label>
        <input type="number" name="kundennummer" id="kundennummer">
        <br>
        <label for="teamsize">Teamgröße:</label>
        <select name="teamsize" id="teamsize">
            <option value="klein">klein</option>
            <option value="mittel">mittel</option>
            <option value="groß">groß</option>
        </select>
        <br>
        <label for="entfernung">Entfernung:</label>
        <input type="number" name="entfernung" id="entfernung" min="1" max="500" required>
        <br>
        <label for="arbeitszeit">Arbeitszeit:</label>
        <input type="number" name="arbeitszeit" id="arbeitszeit" min="1" max="48" required>
        <br>
        <label for="lastenaufzug">Lastenaufzug benötigt</label>
        <input type="checkbox" name="lastenaufzug" id="lastenaufzug">
        <br>
        <label for="pdf">Ausgabe als PDF?</label>
        <input type="checkbox" name="pdf" id="pdf">
        <br>
        <button type="submit">Abschicken</button>
    </form>
    {else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabeText}
		{/if} 		 					
	{/if}
</body>
</html>