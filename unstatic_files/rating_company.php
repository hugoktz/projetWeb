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
        Which company? <br> <input type="text" name="company_name"/>
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
            $company_name = $_POST['company_name'];
            $rating = $_POST['rating'];
            

            $requete = $connexion->prepare("UPDATE company SET interns_evaluation = ((interns_evaluation * number_of_grades) + ?) / (number_of_grades+1)  ,number_of_grades = number_of_grades + 1
                                            WHERE company_name = ?;");
            
            $requete->execute(array($rating, $company_name));
           
        }
    
    ?>

    
</body>
</html>