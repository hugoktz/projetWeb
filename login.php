<?php
session_start();

if (isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=127.0.0.1;dbname=web_project_try_2', 'root', '');

    $requete = "SELECT * FROM user WHERE login = '$login' ";
    $result = $db->prepare($requete);
    $result->execute();

    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($password, $data[0]["password"]))
        {
            echo "Connexion effectuée";
            $_SESSION['login'] = $login;
        }
    }
    else
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (login, password) VALUES ('$login', '$password')";
        $req = $db->prepare($requete);
        $req->execute();
        echo "Enregistrement effectué";
    }
}

?>
