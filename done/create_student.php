<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a pilot account</h1>

    <div class="container">
    <form method = "POST" action="">
    <br>
        login <br> <input type="text" name="login"/>
        <br><br>
        password <br> <input type="text" name="password"/>
        <br><br>
        first name <br> <input type = "text" name = "first_name"/>
        <br><br>
        last name <br> <input type = "text" name = "last_name"/>
        <br><br>  
        center <br> <input type = "tex" name = "center"/>
        <br><br>
        Promotion <br><input type="text" name="promotion"/>
        <br><br>
        
        
        <input type="submit" name="save" value="submit"/>
    </form>
    </div>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $center = $_POST['center'];
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $promotion = $_POST['promotion'];

            $create_company = CreateStudent($login, $password, $first_name, $last_name, $center, $promotion);
            
        }
    
    ?>

    
</body>
</html>