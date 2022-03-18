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

<h2>Search Student</h2>

    <div class="container">
    <form method="POST" action="">

    <label>First Name</label><br>
    <input type = "text" class="txt" name="first_name" placeholder="Enter a NoPil"/><br><br>

    <label>Last Name</label><br>
    <input type = "text" class="txt" name="last_name" placeholder="Enter a NoPil"/><br><br>


    <input type="submit" name="insert" value="SHOW DATA"/>


</form>
</div>


<?php
include 'mysqlfunctions.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $First_Name_Student = $_POST['first_name'];
        $Last_Name_Student = $_POST['last_name'];
        
        $read_student = readStudent($First_Name_Student, $Last_Name_Student);
        echo $read_student['first_name']." ". $read_student['last_name']." ".$read_student['promotion']." ".$read_student['center'];
        echo "<br>";

    }
    
?>

</body>
