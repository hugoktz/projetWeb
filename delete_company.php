<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete a company account</h1>

    <div class="container">
    <form method = "POST" action="">
    <br>
        <label>Which company?</label> <br> <input type="text" name="id_company"/>
            
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $id_company = $_POST['id_company'];

            $requete = $connexion->prepare("DELETE FROM being_located_in WHERE id_company = ?;
                                            DELETE FROM company WHERE id_company = ?;");

            $requete->execute(array($id_company, $id_company));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>