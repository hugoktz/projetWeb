<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read a pilot account</h1>

    <form method = "GET">
        First name <br> <input type="text" name="First_name"/>
        <br>
        Last name <br> <input type="text" name="Last_name"/>
        <br>
        Locality (-ies) <br> <input type = "text" name = "locality"/>
        <br>

        <input type="submit" name="save" value="submit"/>
    </form>

    <?php

    include 'database_connexion.php';

    $connexion = getDatabaseConnexion();

    if(isset($_POST['save']))
    {
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];

        $read_pilot = readPilot($First_name, $Last_name);
        echo $read_pilot['first_name']." ".$read_pilot['last_name']." ".$read_pilot['promotion']." ".$read_pilot['center']." ".$read_pilot['role_name'];
        echo "<br>";
    }


    ?>



</body>
</html>