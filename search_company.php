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

<h2>Search a company</h2>

    <div class="container">
    <form method="POST" action="">

    <label>NoPil</label><br>
    <input type = "text" class="txt" name="NoPil" placeholder="Enter a NoPil"/><br><br>


    <input type="submit" name="insert" value="SHOW DATA"/>


</form>
</div>


<?php
include 'mysqlfunctions.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $NoPil = $_POST['NoPil'];
        
        $read_pilot = readPilot($NoPil);
        echo $read_pilot['NoPil']." ". $read_pilot['NomPil']." ".$read_pilot['NatPil']." ".$read_pilot['NoTV'];
        echo "<br>";

    }
    
?>

</body>
