<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a offer</h1>


    <form method = "POST" action="">
    <br>
        skills needed <br> <input type="text" name="skills"/>
        <br><br>
        promotions<br><input type="text" name="promotions"/>
        <br><br>
        duration<br> <input type="text" name="duration"/>
        <br><br>
        Salary <br> <input type = "text" name = "salary"/>
        <br><br>
        Offer date <br> <input type = "text" name = "offer_date"/>
        <br><br>    
        id company<br> <input type = "text" name = "id_company"/>
        <br><br> 
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
    try 
    {
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $skills = $_POST['skills'];
            $promotions = $_POST['promotions'];
            $salary = $_POST['salary'];
            $duration = $_POST['duration'];
            $offer_date = $_POST['offer_date'];
            $id_company = $_POST['id_company'];

            $requete = $connexion->prepare("INSERT INTO internship (internship_skills, internship_type_promotion, internship_salary, internship_offer_date, internship_duration, id_company)
                                            VALUES (?, ?, ?, ?, ?, ?);");

            $requete->execute(array($skills, $promotions, $salary, $offer_date, $duration, $id_company));
            $connexion->exec($requete);
        }
    }

    catch(PDOException $e)
    {
        echo $requete . "<br>" . $e->getMessage();
    }
    
    ?>

    
</body>
</html>