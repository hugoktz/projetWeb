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
        Offer id <br> <input type="text" name="id_offer"/>
        <br><br>
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $id_offer = $_POST['id_offer'];

            $requete = $connexion->prepare("DELETE FROM internship WHERE id_internship = ?;");
            
            $requete->execute(array($id_offer));
            $stmt = $connexion->query($requete);
        }
    ?>

</body>
</html>