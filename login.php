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

<div class="limiter">
    
    <form class="login100-form validate-form" method="POST" action = "">
        <div class="wrap-input100 validate-input m-b-26" data-validate="E-mail is required">
            <span class = "label-input100">E-mail</span>
            <input class = "input100" type="text" name="login" placeholder="Enter e-mail">
            <span class = "focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
            <span class = "label-input100">Password</span>
            <input class = "input100" type="password" name="password" placeholder="Enter password">
            <span class = "focus-input100"></span>
        </div>


    </form>
</div>



<!--
<h2>Connect</h2>

    <div class="container">
    <form method="POST" action="">

    <label>Login</label><br>
    <input type = "text" class="txt" name="Loginn" placeholder="Enter a Login"/><br><br>


    <label>Password</label><br>
    <input type = "text" class="txt" name="Passwordd" placeholder="Enter a Password"/><br><br>


    <input type="submit" name="insert" value="INSERT DATA"/>


</form>
</div>
-->

<?php

include 'database_connexion.php';

if (isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=127.0.0.1;dbname=web_project_try_2', 'root', '');

    $requete = "SELECT * FROM user WHERE login = '$login' ";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]["password"]))
        {
            echo "Connexion effectuée";
            $_SESSION['login'] = $login;
        }
    }
    else
    {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (login, password) VALUES ('$login', '$password')";
        $req = $db->prepare($requete);
        $req->execute();
        echo "Enregistrement effectué";
    }
}

?>

</body>
</html>
