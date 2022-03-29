<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>Interact with:</h2>

    <h3>a company account</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_company.php">{$p} a company</a></li>

    {/foreach}
    <li><a href="evaluate_company.php">Evaluate a company</a></li>
    <li><a href="compare_company.php">See a company's stats</a></li>
</ul>
<h3>a student account</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_student.php">{$p} a student</a></li>

    {/foreach}
    
    <li><a href="see_stats_student.php">See a student's stats</a></li>
</ul>
<h3>a representative account</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_representative.php">{$p} a representative</a></li>

    {/foreach}
    <li><a href="give_rights_representative.php">Give rights to a representative</a></li>
</ul>
<h3>a pilot account</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_pilot.php">{$p} a pilot</a></li>

    {/foreach}
</ul>

<h3>an offer</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_offer.php">{$p} a offer</a></li>

    {/foreach}
    <li><a href="see_stats_offer.php">See an offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="add_offer_wishlist.php">Add an offer to the wish-list</a></li>
    <li><a href="remove_offer_from_wishlist.php">Delete an offer from the wish-list</a></li>
    <li><a href="apply_offer.php">Apply to an offer</a></li>
    <li><a href="application_step_1.php">Inform that an application is on step 1</a></li>
    <li><a href="application_step_2.php">Inform that an application is on step 2</a></li>
    <li><a href="application_step_3.php">Inform that an application is on step 3</a></li>
    <li><a href="application_step_4.php">Inform that an application is on step 4</a></li>
    <li><a href="application_step_5.php">Inform that an application is on step 5</a></li>
    <li><a href="application_step_6.php">Inform that an application is on step 6</a></li>
</ul>

</body>
</html>