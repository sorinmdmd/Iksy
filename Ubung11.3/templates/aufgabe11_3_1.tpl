<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/Forms.css">
<link rel="stylesheet" type="text/css" href="./css/Tables.css">

</head>
<body>
	<h2>Login Formular</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<label>Benutername</label>
		<input type="text" name="benutzername">
		<label>Passwort</label>
		<input type="password" name="passwort">
		<input type="submit" name="Button1" value="Abschicken">
	</form>
	{else} 
		{if (isset($fehler))}
			{$fehlertext}
		{else} 
		{$ausgabe}
	{/if}
{/if}
</body>
</html>
