
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hi</h1>

    <h2>How would you like to identify yourself?</h2>

    {foreach from=$roles item=p}

    <h3>As <a href="login_{$p}.php">{$p}</a></h3>    

    {/foreach}
    
</body>
</html>