<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Welcome to My Website</h1>
    <form method="POST" action="{$smarty.server.PHP_SELF}">
        <!-- Use Smarty syntax for CSRF token -->
        <input type="hidden" name="csrf_token" value="{$csrf_token}">
        
        <label for="nummer">Nummer</label>
        <br>
        <select name="nummer" id="nummer">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
    {if isset($error)}
    <div class="error-message">
        {$error}
    </div>
    {/if}
</body>
</html>