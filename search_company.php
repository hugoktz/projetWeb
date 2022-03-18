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

<h2>Search Company</h2>

    <div class="container">
    <form method="POST" action="">

    <label>Name</label><br>
    <input type = "text" class="txt" name="company_name" placeholder="Enter a NoPil"/><br><br>

    <input type="submit" name="insert" value="SHOW DATA"/>


</form>
</div>


<?php
include 'mysqlfunctions.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $Name_Company = $_POST['company_name'];
        
        $read_Company = readCompany($Name_Company);
        echo $read_Company['company_name']." ". $read_Company['company_sector']." ".$read_Company['nb_CESI_intern']." ".$read_Company['interns_evaluation']." ".$read_Company['Pilote_trust']." ".$read_Company['internship_nb_available'];
        echo "<br>";

    }
    
?>

</body>
