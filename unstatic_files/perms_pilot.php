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

    
<?php endif; ?>
<?php
require_once('Smarty-4.1.0/libs/Smarty.class.php');

    $smarty = new Smarty();
    $smarty->template_dir = 'views';
    $smarty->compile_dir = 'tmp';

    $array = array(
        'read',
        'create',
        'update',
        'delete'
    );

    $smarty->assign('crud', $array);

    $smarty->display('perms_pilot.tpl');
?>
</body>
</html>