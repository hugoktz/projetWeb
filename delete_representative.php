<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete a pilot account</h1>


    <form method = "POST" action="">
    <br>
        Representative id <br> <input type="text" name="id_representative"/>
        <br><br>
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $id_representative = $_POST['id_representative'];

            $requete = $connexion->prepare("DELETE from possessing where possessing.id_user = ?;
                                            DELETE from users where users.id_user = ?;");

            $requete->execute(array($id_representative, $id_representative));
            $connexion->exec($requete);
        }
    ?>

</body>
</html>