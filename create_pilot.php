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


    <form method = "GET" action="">
    <br>
        login <br> <input type="text" name="login"/>
        <br><br>
        password <br> <input type="text" name="password"/>
        <br><br>
        promotion <br> <input type="text" name="promotion"/>
        <br><br>
        center <br> <input type="text" name="center"/>
        <br><br>
        Last Name <br> <input type = "text" name = "last_name"/>
        <br><br>
        First Name<br> <input type = "text" name = "first_name"/>
        <br><br>
        Id of the company: <br> <input type = "text" name = "id_company"/>
        <br><br>
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        $connexion = mysqli_connect("127.0.0.1","root","","web_project_try_4") or die("Connection failed");
        if(!empty($_POST['save']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $promotion = $_POST['promotion'];
            $center = $_POST['center'];
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $id_company = $_POST['id_company'];
            
            $create_company = CreateCompany($login, $password, $promotion, $center, $last_name, $first_name, $id_company);
            
        }


    /*
        if(!empty($_POST['read']) and isset($_POST['lemenu']))
        {
            $company_name = $_POST['company_name'];
        
            $read_company = readCompany($company_name);
            echo $read_company['company_sector']." ". $read_company['nb_CESI_interns']." ".$read_company['interns_evaluation']." ".$read_company['Pilote_trust']." ".$read_company['internship_nb_available'];
            echo "<br>";
        }
        if(!empty($_POST['update']) and isset($_POST['lemenu']))
        {
            $id_company = $_POST['id_company'];
            $company_name = $_POST['company_name'];
            $company_sector = $_POST['company_sector'];
            $nb_CESI_intern = $_POST['nb_CESI_intern'];
            $Pilote_trust = $_POST['Pilote_trust'];
            $city = $_POST['city'];
        
       
        $sql = ("UPDATE company INNER JOIN being_located_in ON company.id_company = being_located_in.id_company
                INNER JOIN places ON places.id_place = being_located_in.id_place
                SET company_name = '$company_name', company_sector = '$company_sector', nb_CESI_intern = '$nb_CESI_intern', Pilote_trust = '$Pilote_trust', city = '$city'
                WHERE id_company = '$id_company'");
        $connexion->exec($sql);
        }
        if(!empty($_POST['delete']) and isset($_POST['lemenu']))
        {
            $id_company = $_POST['id_company'];        
       
            $sql = ("DELETE FROM company WHERE id_company = '$id_company'");
            $connexion->exec($sql);
        }
        */
    
    ?>

    
</body>
</html>