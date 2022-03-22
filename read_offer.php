<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read an offer</h1>
    <div class="container">
    <form method = "POST">
        <label>id internship</label> <br> <input type="text" name="id_internship"/>
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
        $id_internship = $_POST['id_internship'];

        $read_offer = readOffer($id_internship);
        echo $read_offer['skills']." ".$read_offer['street_number']." ".$read_offer['street_name']." ".$read_offer['city']." ".$read_offer['postal_code']." ".$read_offer['company_name']." ".$read_offer['promotions']." ".$read_offer['start_date']." ".$read_offer['end_date']." ".$read_offer['salary_offer']." ".$read_offer['nb_available'];
        echo "<br>";
    }


    ?>



</body>
</html>