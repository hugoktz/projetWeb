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
    <li><a href="see_stats_company.php">See a company's stats</a></li>
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
    <li><a href="see_stats_representative.php">Give rights to a representative</a></li>
</ul>

<h3>an offer</h3>
<ul>
    {foreach from=$crud item=p}

    <li><a href="{$p}_offer.php">{$p} a offer</a></li>

    {/foreach}
    <li><a href="see_stats_offer.php">See a offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="application_step_3.php">Inform that an application is on step 3</a></li>
    <li><a href="application_step_4.php">Inform that an application is on step 4</a></li>
</ul>
<?php endif; ?>