<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a company account</h1>


    <form method = "POST" action="">
    <br>
        Which company? <br> <input type="text" name="id_company"/>
        <br><br>
        How do you rate it? (out of 5)<br> <input type="text" name="rating"/>
        <br><br>
        
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $id_company = $_POST['id_company'];
            $rating = $_POST['rating'];
            

            $requete = $connexion->prepare("UPDATE company SET number_of_grades = number_of_grades + 1)
            
            ");
            /*
            $create_company = updateCompany($id_company, $company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $id_place, $street_number, $street_name, $city, $postal_code);
            */
        }
    
    ?>

    
</body>
</html>