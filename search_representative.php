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

<h2>Search Representative</h2>

    <div class="container">
    <form method="POST" action="">

    <label>First Name</label><br>
    <input type = "text" class="txt" name="first_name" placeholder="Enter a First Name"/><br><br>

    <label>Last Name</label><br>
    <input type = "text" class="txt" name="last_name" placeholder="Enter a Last Name"/><br><br>


    <input type="submit" name="insert" value="SHOW DATA"/>


</form>
</div>


<?php
include 'mysqlfunctions.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $First_Name_Representative = $_POST['first_name'];
        $Last_Name_Representative = $_POST['last_name'];
        
        $read_representative = readRepresentative($First_Name_Representative, $Last_Name_Representative);
        echo $read_pilot['first_name']." ". $read_pilot['last_name']." ".$read_pilot['promotion']." ".$read_pilot['center'];
        echo "<br>";

    }
    
?>

</body>
