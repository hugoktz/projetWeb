<?php


$nom = null;
if(!empty($_COOKIE['user']))
{
    $nom = $_COOKIE['user'];
}
if(!empty($_POST['login']))
{
    setcookie('user', $_POST['login']);
    $nom = $_POST['login'];
}
?>