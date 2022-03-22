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
        street_number <br> <input type="text" name="street_number"/>
        <br><br>
        street name <br> <input type = "text" name = "street_name"/>
        <br><br>
        city <br> <input type = "text" name = "city"/>
        <br><br>  
        Postal code <br> <input type = "tex" name = "postal_code"/>
        <br><br>
        Company name <br> <input type="text" name = "company_name"/>
        <br><br>
        promotions<br><input type="text" name="promotions"/>
        <br><br>
        start date<br> <input type="text" name="start_date"/>
        <br><br>
        end date<br> <input type="text" name="end_date"/>
        <br><br>
        Salary <br> <input type = "text" name = "salary"/>
        <br><br>
        Offer date <br> <input type = "text" name = "offer_date"/>
        <br><br>      
        number of places available<br> <input type = "text" name = "nb_available"/>
        <br><br> 
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['save']))
        {
            $skills = $_POST['skills'];
            $street_number = $_POST['street_number'];
            $street_name = $_POST['street_name'];
            $city = $_POST['city'];
            $postal_code = $_POST['postal_code'];
            $company_name = $_POST['company_name'];
            $promotions = $_POST['promotions'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $salary = $_POST['salary'];
            $offer_date = $_POST['offer_date'];
            $nb_available = $_POST['nb_available'];

            $create_offer = CreateOffer($skills, $street_number, $street_name, $city, $postal_code, $company_name, $promotions, $start_date, $end_date, $salary, $offer_date, $nb_available);
            
        }
    
    ?>

    
</body>
</html>