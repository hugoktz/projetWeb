<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a representative account</h1>


    <form method = "POST" action="">
    <br>
        ID <br> <input type="text" name="id_user"/>
        <br><br>
        Login <br> <input type="text" name="login"/>
        <br><br>
        Password <br> <input type="text" name="password"/>
        <br><br>
        First name <br> <input type = "text" name = "first_name"/>
        <br><br>
        Last name <br> <input type = "text" name = "last_name"/>
        <br><br>  
        Center <br> <input type = "text" name = "center"/>
        <br><br> 
        ID Promotion <br> <input type="text" name = "promotion"/>
        <br><br>
        ID Company <br> <input type="text" name = "id_company"/>
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
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $center = $_POST['center'];
            $promotion = $_POST['promotion'];
            $id_company = $_POST['id_company'];
            $encpassword = md5($password);

            $requete = $connexion->prepare("UPDATE users SET login = ?, password = ?, center = ?, last_name = ?, first_name = ?, id_company = ?, id_promotion = ?
                                            WHERE id_user = ?;");
            
            $requete->execute(array($login, $encpassword, $center, $last_name, $first_name, $id_company, $promotion, $id_user));
            $connexion->exec($requete);
            /*
            $update_pilot = updatePilote($id_user, $login, $password, $first_name, $last_name, $center, $promotion);
            */
        }
    
    ?>

    
</body>
</html>