<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a company account</h1>

    <div class="container">
    <form method = "POST" action="">
    <br>
        <label>Company name</label> <br> <input type="text" name="company_name"/>
        <br><br>
        <label>Company sector</label> <br> <input type="text" name="company_sector"/>
        <br><br>
        <label>Number of student already taken:</label> <br> <input type = "text" name = "nb_CESI_intern"/>
        <br><br>
        <label>Evaluation of the interns (if none insert the average value of 3):</label> <br> <input type = "text" name = "interns_evaluation"/>
        <br><br>  
        <label>Pilot trust rate:</label> <br> <input type = "tex" name = "Pilote_trust"/>
        <br><br>
        <label>Number of available internships:</label> <br> <input type="text" name = "internship_nb_available"/>
        <br><br>
        <label>Street number</label> <br> <input type="text" name="street_number"/>
        <br><br>
        <label>Street name</label> <br> <input type="text" name="street_name"/>
        <br><br>
        <label>City</label> <br> <input type = "text" name = "city"/>
        <br><br>
        <label> Postal code</label> <br> <input type = "text" name = "postal_code"/>
        <br><br>      
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        error_reporting(0);
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $company_name = $_POST['company_name'];
            $company_sector = $_POST['company_sector'];
            $nb_CESI_intern = $_POST['nb_CESI_intern'];
            $interns_evaluation = $_POST['interns_evaluation'];
            $Pilote_trust = $_POST['Pilote_trust'];
            $internship_nb_available = $_POST['internship_nb_available'];
            $street_number = $_POST['street_number'];
            $street_name = $_POST['street_name'];
            $city = $_POST['city'];
            $postal_code = $_POST['postal_code'];

            $requete = $connexion->prepare("INSERT INTO places (city, street_name, street_number, postal_code)
            VALUES (?, ?, ?, ?);
            INSERT INTO company (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available)
            VALUES (?, ?, ?, ?, ?, ?);");

            $requete->execute(array($city, $street_name, $street_number, $postal_code, $company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>