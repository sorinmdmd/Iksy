<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
</head>
<body>
    <h1>Result Page</h1>
    <p>This is a basic HTML template for the result page.</p>
    {if $result}
    {foreach from=$result item=row}
        {foreach from=$row key=key item=value}
            {$key}: {$value}<br>
        {/foreach}
        <hr>
    {/foreach}
{else}
    No results found.
{/if}

</body>
</html>