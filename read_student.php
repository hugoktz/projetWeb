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
    <form method = "POST">
        <label>First name</label> <br> <input type="text" name="First_name"/>
        <br>
        <label>Last name</label> <br> <input type="text" name="Last_name"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
    </form>
</div>

    <?php

    include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];

        $read_student = readStudent($First_name, $Last_name);
        echo $read_student['first_name']." "." ".$read_student['center']." ".$read_student['role_name'];
        echo "<br>";
    }


    ?>



</body>
</html>