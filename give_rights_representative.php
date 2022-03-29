<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Give rights to representatives account</h1>


    <form method = "POST" action="">
    <br>
        Which right?<br> <input type="text" name="id_right"/>
        <br><br>
        
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $id_right = $_POST['id_right'];

            $requete = $connexion->prepare("INSERT INTO corresponding_to (id_permission, id_role)
                                            VALUES (?, 3);");
            
            $requete->execute(array($id_right));
            $connexion->exec($requete);
            /*
            $update_pilot = updatePilote($id_user, $login, $password, $first_name, $last_name, $center, $promotion);
            */
        }    
    ?>
    
</body>
</html>