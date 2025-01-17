<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Page</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <form  method="POST" action="{$smarty.server.PHP_SELF}">
        <label for="nummer">Nummer</label>
        <input type="number" name="nummer" id="nummer">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
</body>
</html>