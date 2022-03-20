<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interact with a company account</h1>

    <div class="container">
    <form method = "GET" action="">
    <select>
        <option>Choose an option</option>
        <option name="create">Create</option>
        <option name="read">Read</option>
        <option name="update">Update</option>
        <option name="delete">Delete</option>
    </select>
    <br>
    <input type="submit" name = "lemenu" value = "confirm"/>
    
    </form>
    </div>

    <form method = "GET">

        Company id <br> <input type="txt" name="id"/>

        Company name <br> <input type="text" name="login"/>
        <br>
        Activity area <br> <input type="text" name="password"/>
        <br>
        Locality (-ies) <br> <input type = "text" name = "city"/>
        <br>
        Number of student already taken: <br> <input type = "text" name = "already_taken"/>
        <br>
        Pilot trust rate: <br> <input type = "tex" name = "trust"/>

        <input type="submit" name="save" value="submit"/>
    </form>

    <?php


        $connexion = getDatabaseConnexion();
  if(isset($_POST['save']))
    {

        if(!empty($_POST['create']) and isset($_POST['lemenu']))
        {
            $company_name = $_POST['company_name'];
            $company_sector = $_POST['company_sector'];
            $nb_CESI_intern = $_POST['nb_CESI_intern'];
            $Pilote_trust = $_POST['Pilote_trust'];
            $city = $_POST['city'];
       
        $sql = ("INSERT INTO company (company_name, company_sector, nb_CESI_intern, Pilote_trust, internship_nb_available)
                 SET company.company_name = '$company_name', company.company_sector = '$company_sector',
                 company.nb_CESI_intern = '$nb_CESI_intern', company.Pilote_trust = '$Pilote_trust', places.city = '$city' 
                 FROM places 
                 INNER JOIN being_located_in 
                 ON places.id_place = being_located_in.id_place 
                 INNER JOIN company ON company.id_company = being_located_in.id_company");
        $connexion->exec($sql);
        }
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
    }
    ?>

    
</body>
</html>