
<?php

    require_once('Smarty-4.1.0/libs/Smarty.class.php');

    $smarty = new Smarty();
    $smarty->template_dir = 'views';
    $smarty->compile_dir = 'tmp';

    $array = array(
        'admin',
        'pilot',
        'representative',
        'student'
    );

    $smarty->assign('roles', $array);

    $smarty->display('index.tpl');
?>