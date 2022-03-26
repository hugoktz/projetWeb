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

    {"The forests of Middle Earth :"}

    <h3><a href="login_admin.php">As an admin?</a></h3>

    <h3><a href="login_pilot.php">As a pilot?</a></h3>

    <h3><a href="login_representative.php">As a representative?</a></h3>

    <h3><a href="login_student.php">As a student?</a></h3>
    
</body>
</html>


<?php

    require_once('Smarty-4.1.0/libs/Smarty.class.php');

    $smarty = new Smarty();
    $smarty->template_dir = 'views';
    $smarty->compile_dir = 'tmp';

    $smarty->display('index.tpl');

    $smarty->assign('noms', array('admin', 'pilot', 'representative', 'student'))

?>