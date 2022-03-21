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
        Skills needed <br> <input type="text" name="internship_skills"/>
        <br><br>
        Company <br> <input type="text" name="internship_company"/>
        <br><br>
        Promotion(s) <br> <input type = "text" name = "internship_type_promotion"/>
        <br><br>
        Salary<br> <input type = "text" name = "internship_salary"/>
        <br><br>  
        Offer date <br> <input type = "tex" name = "internship_offer_date"/>
        <br><br>
        Validation sheet <br> <input type="text" name = "application_validation_sheet"/>
        <br><br>
        Internship agreement<br><input type="text" name="application_internship_agreement"/>
        <br><br>
        Start date <br> <input type="text" name="internship_start_date"/>
        <br><br>
        End date <br> <input type="text" name="internship_end_date"/>
        <br><br>     
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $internship_skills = $_POST['internship_skills'];
            $internship_company = $_POST['internship_company'];
            $internship_type_promotion = $_POST['internship_type_promotion'];
            $internship_salary = $_POST['internship_salary'];
            $internship_offer_date = $_POST['internship_offer_date'];
            $application_validation_sheet = $_POST['application_validation_sheet'];
            $application_internship_agreement = $_POST['application_internship_agreement'];
            $internship_start_date = $_POST['internship_start_date'];
            $internship_end_date = $_POST['internship_end_date'];

            $create_offer = CreateOffer($internship_skills, $internship_company, $internship_type_promotion, $internship_salary, $internship_offer_date, $application_validation_sheet, $application_internship_agreement, $internship_start_date, $internship_end_date);
            
        }
    
    ?>

    
</body>
</html>