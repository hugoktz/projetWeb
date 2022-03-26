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
    <li><a href="create_company.php">Create a company</a></li>
    <li><a href="update_company.php">Update a company</a></li>
    <li><a href="evaluate_company.php">Evaluate a company</a></li>
    <li><a href="delete_company.php">Delete a company</a></li>
    <li><a href="see_stats_company.php">See a company's stats</a></li>
</ul>
<h3>a student account</h3>
<ul>
    <li><a href="read_student.php">Search a student</a></li>
    <li><a href="create_student.php">Create a student</a></li>
    <li><a href="update_student.php">Update a student</a></li>
    <li><a href="delete_student.php">Delete a student</a></li>
    <li><a href="see_stats_student.php">See a student's stats</a></li>
</ul>
<h3>a representative account</h3>
<ul>
    <li><a href="read_representative.php">Search a representative</a></li>
    <li><a href="create_representative.php">Create a representative</a></li>
    <li><a href="update_representative.php">Update a representative</a></li>
    <li><a href="delete_representative.php">Delete a representative</a></li>
    <li><a href="see_stats_representative.php">Give rights to a representative</a></li>
</ul>
<h3>a pilot account</h3>
<ul>
    <li><a href="create_pilot.php">Create a pilot</a></li>
    <li><a href="read_pilot.php">Read a pilot</a></li>
    <li><a href="update_pilot.php">Update a pilot</a></li>
    <li><a href="delete_pilot.php">Delete a pilot</a></li>
</ul>

<h3>an offer</h3>
<ul>
    <li><a href="read_offer.php">Search a offer</a></li>
    <li><a href="create_offer.php">Create a offer</a></li>
    <li><a href="update_offer.php">Update a offer</a></li>
    <li><a href="delete_offer.php">Delete a offer</a></li>
    <li><a href="see_stats_offer.php">See a offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="add_wish_list.php">Add an offer to the wish-list</a></li>
    <li><a href="delete_wish_list.php">Delete an offer from the wish-list</a></li>
    <li><a href="apply_offer.php">Apply to an offer</a></li>
    <li><a href="application_step_1.php">Inform that an application is on step 1</a></li>
    <li><a href="application_step_2.php">Inform that an application is on step 2</a></li>
    <li><a href="application_step_3.php">Inform that an application is on step 3</a></li>
    <li><a href="application_step_4.php">Inform that an application is on step 4</a></li>
    <li><a href="application_step_5.php">Inform that an application is on step 5</a></li>
    <li><a href="application_step_6.php">Inform that an application is on step 6</a></li>
</ul>

<?php endif; ?>

</body>
</html>