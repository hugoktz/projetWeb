<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add an offer to the wishlist</h1>

    <div class="container">
    <form method = "POST" action="">
    <br>
        <label>Which user?</label> <br> <input type="text" name="id_user"/>
        <br><br>
        <label>Which offer?</label> <br> <input type="text" name="id_offer"/>
        <br><br>       
        
        <input type="submit" name="save" value="submit"/>
    </form>
    </div>
    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $id_user = $_POST['id_user'];
            $id_offer = $_POST['id_offer'];

            $requete =$connexion->prepare("INSERT INTO wish_list (id_user, id_internship)
                                            VALUES (?, ?);"); 

            $requete->execute(array($id_user, $id_offer));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>