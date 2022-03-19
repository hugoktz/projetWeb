<?php
    $connect = mysqli_connect("127.0.0.1","root","","web_project_try_2") or die("Connection failed");
    if(!empty($_POST['save']))
    {
        $username = $_POST['login'];
        $password = $_POST['password'];
        $query = "select * from user where login='$username' and password='$password'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            echo "Login Successful";
        }
        else
        {
            echo "Login not successful";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="effets.js"></script>
</head>

<body>
    <form method = "post">
        Enter your login <input type="text" name="login"/>
        <br>
        Enter your password <input type="password" name="password"/>
        <br>
        <input type="submit" name="save" value="login"/>
    </form>
</body>



<?php
/*
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
*/
?>
