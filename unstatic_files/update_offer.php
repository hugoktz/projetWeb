<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update an offer</h1>


    <form method = "POST" action="">
    <br>
        id internship <br> <input type = "text" name = "id_internship"/>
        <br><br>  
        skills needed <br> <input type="text" name="skills"/>
        <br><br>
        promotion <br> <input type="text" name="promotion"/>
        <br><br>
        salary <br> <input type = "text" name = "salary"/>
        <br><br>
        offer date <br> <input type = "text" name = "offer_date"/>
        <br><br>  
        duration <br> <input type = "tex" name = "duration"/>
        <br><br>
        Company id <br> <input type="text" name = "id_company"/>
        <br><br>
        

        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $id_internship = $_POST['id_internship'];
            $skills = $_POST['skills'];
            $promotion = $_POST['promotion'];
            $salary = $_POST['salary'];
            $offer_date = $_POST['offer_date'];
            $duration = $_POST['duration'];
            $id_company = $_POST['id_company'];

            $requete = $connexion->prepare("UPDATE internship SET internship_skills = ?, internship_type_promotion = ?, internship_salary = ?, internship_offer_date = ?, internship_duration = ?, id_company = ?
                                            WHERE id_internship = ?;");
            $requete->execute(array($skills, $promotion, $salary, $offer_date, $duration, $id_company, $id_internship));
            $connexion->exec($requete);
        }
    
    ?>
</body>
</html>