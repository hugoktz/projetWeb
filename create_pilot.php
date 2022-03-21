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


    <form method = "POST" action="">
    <br>
        login <br> <input type="text" name="company_name"/>
        <br><br>
        password <br> <input type="text" name="company_sector"/>
        <br><br>
        password <br> <input type="text" name="street_number"/>
        <br><br>
        promotion <br> <input type="text" name="street_name"/>
        <br><br>
        center <br> <input type = "text" name = "city"/>
        <br><br>
        last name <br> <input type = "text" name = "postal_code"/>
        <br><br>
        First name <br> <input type = "text" name = "nb_CESI_intern"/>
        <br><br>
        Evaluation of the interns (if none insert the average value of 3): <br> <input type = "text" name = "interns_evaluation"/>
        <br><br>        
        Pilot trust rate: <br> <input type = "text" name = "Pilote_trust"/>
        <br><br>
        Number of available internships: <br> <input type="text" name = "internship_nb_available"/>
        <br><br>
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = mysqli_connect("127.0.0.1","root","","web_project_try_4") or die("Connection failed");
        if(!empty($_POST['save']))
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
            
            $create_company = CreatePilot($company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $street_number, $street_name, $city, $postal_code);
            
        }
    ?>

    
</body>
</html>