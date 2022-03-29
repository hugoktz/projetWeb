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

<h2>Search offer Pilote</h2>

    <div class="container">
    <form method="POST" action="">

    <label>ID</label><br>
    <input type = "text" class="txt" name="id_internship" placeholder="Enter a NoPil"/><br><br>


    <input type="submit" name="insert" value="SHOW DATA"/>


</form>
</div>


<?php
include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $id_internship = $_POST['id_internship'];
        $read_internship = readOffer($id_internship);
        echo $read_internship['internship_skills']." ". $read_internship['internship_company']." ".$read_internship['internship_type_promotion']." ".$read_internship['internship_salary']." ".$read_internship['internship_offer_date']." ".$read_internship['application_validation_sheet']." ".$read_internship['application_internship_agreement']." ".$read_internship['internship_date_start']." ".$read_internship['internship_end_start'];
        echo "<br>";
    }
    
?>

</body>
