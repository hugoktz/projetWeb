<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read a company account</h1>
    <div class="container">
    <form method = "POST">
        <label>Company name</label> <br> <input type="text" name="Company_name"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
        <br>
    </form>
</div>

    <?php

    include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $Company_name = $_POST['Company_name'];

        $read_company = readCompany($Company_name);
        echo "<br>";
        echo $read_company['company_name']." ".$read_company['company_sector']." ".$read_company['nb_CESI_interns']." ".$read_company['interns_evaluation']." ".$read_company['Pilote_trust']." ".$read_company['internship_nb_available'];
        echo "<br>";
    }


    ?>



</body>
</html>