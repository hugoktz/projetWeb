<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require 'generate_cookie.php';

if ($nom): ?>
        <h1>Hello dear <?= htmlentities($nom) ?></h1>


    <h2>Interact with:</h2>

    <h3>a company account</h3>
<ul>
    <li><a href="read_company.php">Search a company</a></li>
    <li><a href="evaluate_company.php">Evaluate a company</a></li>
    <li><a href="see_stats_company.php">See a company's stats</a></li>
</ul>


<h3>an offer</h3>
<ul>
    <li><a href="read_offer.php">Search a offer</a></li>
    <li><a href="see_stats_offer.php">See a offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="add_wish_list.php">Add an offer to the wish-list</a></li>
    <li><a href="delete_wish_list.php">Delete an offer from the wish-list</a></li>
    <li><a href="apply_offer.php">Apply to an offer</a></li>
    <li><a href="application_step_1.php">Inform that an application is on step 1</a></li>
    <li><a href="application_step_2.php">Inform that an application is on step 2</a></li>
    <li><a href="application_step_5.php">Inform that an application is on step 5</a></li>
</ul>
<?php endif; ?>
</body>
</html>