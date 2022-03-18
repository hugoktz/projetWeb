<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="effets.js"></script>
</head>
<body>

<h2>Create Pilote</h2>

    <div class="container">
    <form method="POST" action="">

    <label>Login</label><br>
    <input type = "text" class="txt" name="Loginn" placeholder="Enter a Login"/><br><br>


    <label>Password</label><br>
    <input type = "text" class="txt" name="Passwordd" placeholder="Enter a Password"/><br><br>


    <input type="submit" name="insert" value="INSERT DATA"/>


</form>
</div>


<?php
/*
include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $Login = $_POST['Loginn'];
        $Password = $_POST['Passwordd'];
        $requete = "SELECT * FROM pilote WHERE Loginn = $Login AND Passwordd = $Password";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
        
        $connexion->exec($sql);

        
    }
    echo "<br/>Les requêtes construites : ".$sql;
    */
?>

</body>
</html>
