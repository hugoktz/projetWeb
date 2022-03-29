<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read an offer</h1>
    <div class="container">
    <form method = "POST">
        <label>id internship</label> <br> <input type="text" name="id_internship"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
    </form>
</div>

    <?php

    include 'database_connexion.php';
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $id_internship = $_POST['id_internship'];

        $read_offer = readOffer($id_internship);

        for ($i=0; $i < 9; $i++) { 
            echo $read_offer[$i]." "."/"." ";
            
        }
        
    }


    ?>



</body>
</html>