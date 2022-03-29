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
    include 'generate_cookie.php';
    $connect = mysqli_connect("127.0.0.1","root","","web_project_try_2") or die("Connection failed");
    if(!empty($_POST['save']))
    {
        $username = $_POST['login'];
        $password = $_POST['password'];
        $encpassword = md5($password);
        $query = "SELECT * from users 
                    INNER JOIN possessing 
                    ON users.id_user = possessing.id_user 
                    INNER JOIN roles 
                    ON possessing.id_role = roles.id_role
                    WHERE roles.id_role = 1
                    and users.login = '$username' and users.password = '$encpassword';";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            header("Location: perms_student.php");
                        
        }
        else
        {
            echo "Login not successful";
        }
    }

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

</html>
