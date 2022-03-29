<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apply to an offer</h1>


    <form method = "POST" action="">
    <br>
        To what company would you like to send your CV and motivation letter?<br> <input type="text" name="id_company"/>
        <br><br>     
        For what offer would you like to send your CV and motivation letter?<br> <input type="text" name="id_internship"/>
        <br><br>    
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $id_company = $_POST['id_company'];
            $id_internship = $_POST['id_internship'];
            
            $requete =$connexion->prepare("UPDATE application SET application_CV = 'sent to the company', application_motivation_letter = 'sent to the company'
                                            WHERE id_application = ?;"); 
            
            $requete->execute(array($application_name));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>