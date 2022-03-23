<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a representative account</h1>


    <form method = "POST" action="">
    <br>
        login <br> <input type="text" name="login"/>
        <br><br>
        password <br> <input type="text" name="password"/>
        <br><br>
        center <br> <input type = "text" name = "center"/>
        <br><br>
        First name <br> <input type = "text" name = "first_name"/>
        <br><br>  
        Last name <br> <input type = "tex" name = "last_name"/>
        <br><br>
        Permissions <br><input type="text" name="permissions"/>
        <br><br>
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $center = $_POST['center'];
            $permissions = $_POST['permissions'];

            $create_company = CreateRepresentative($login, $password, $first_name, $last_name, $center, $permissions);
            
        }
    
    ?>

    
</body>
</html>