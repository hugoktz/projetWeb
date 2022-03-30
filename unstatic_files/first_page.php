
<head>
    <!--Manifest-->
		<link rel="manifest" href="manifest.json">
		<link rel="apple-touch-icon" sizes="180x180" href="logo10.png">
		<!--ServiceWorker-->
		<meta name="viewport" content="width=device-width", initial-scale="1", minimum-scale="1">
		<meta name="theme-color" content="#4285f4">
</head>


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