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
        Company name <br> <input type="text" name="company_name"/>
        <br><br>
        Activity area <br> <input type="text" name="company_sector"/>
        <br><br>
        Locality (-ies) <br> <input type = "text" name = "city"/>
        <br><br>
        Number of student already taken: <br> <input type = "text" name = "nb_CESI_intern"/>
        <br><br>
        Evaluation of the interns (if none insert the average value of 3): <br> <input type = "text" name = "interns_evaluation"/>
        <br><br>        
        Pilot trust rate: <br> <input type = "tex" name = "Pilote_trust"/>
        <br><br>
        Number of available internships: <br> <input type="text" name = "internship_nb_available"/>
        <br><br>
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        $connexion = mysqli_connect("127.0.0.1","root","","web_project_try_4") or die("Connection failed");
        if(!empty($_POST['save']))
        {
            $company_name = $_POST['company_name'];
            $company_sector = $_POST['company_sector'];
            $city = $_POST['city'];
            $nb_CESI_intern = $_POST['nb_CESI_intern'];
            $interns_evaluation = $_POST['interns_evaluation'];
            $Pilote_trust = $_POST['Pilote_trust'];
            $internship_nb_available = $_POST['internship_nb_available'];
       
            $sql = "INSERT INTO company (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available
                    VALUES ('$company_name', '$company_sector', $nb_CESI_intern, NULL, $Pilote_trust, NULL)";

            $result = mysqli_query($connect, $sql);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                $connexion->PDO::exec($sql);
            }
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