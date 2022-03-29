<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read a representative account</h1>
    <div class="container">
    <form method = "POST" action="">
        <label>First name</label> <br> <input type="text" name="First_name"/>
        <br>
        <label>Last name</label> <br> <input type="text" name="Last_name"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
    </form>
</div>

    <?php

    require 'database_connexion.php';
    $connexion = getDatabaseConnexion();
 
    if(isset($_POST['insert']))
    {
        $read_pilot = null;
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];

       $read_representative = readRepresentative($First_name, $Last_name);

       for ($i=0; $i < 8; $i++) { 
           echo $read_representative[$i]." "."/"." ";
       }
              
    }


    ?>



</body>
</html>