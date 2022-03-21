<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a pilot account</h1>


    <form method = "POST" action="">
    <br>
        User id <br> <input type="text" name="id_user"/>
        <br><br>
        Login <br> <input type="text" name="login"/>
        <br><br>
        Password <br> <input type="text" name="password"/>
        <br><br>
        Center <br> <input type = "text" name = "center"/>
        <br><br>
        Last name <br> <input type = "text" name = "last_name"/>
        <br><br>  
        First name <br> <input type = "text" name = "first_name"/>
        <br><br> 
        Id company <br> <input type = "tex" name = "id_company"/>
        <br><br>
        Promotion <br> <input type="text" name = "promotion"/>
        <br><br>
        
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $id_user = $_POST['id_user'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $center = $_POST['center'];
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $id_company = $_POST['id_company'];
            $promotion = $_POST['promotion'];

            $update_pilot = updatePilote($id_user, $login, $password, $center, $last_name, $first_name, $id_company, $promotion);
            
        }
    
    ?>

    
</body>
</html>