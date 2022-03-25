<?php

function getDatabaseConnexion()
    {
        try {
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=127.0.0.1;dbname=web_project_try_5', $user, $pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;

        } catch (PDOException $e) 
        {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

function CreateRepresentative($login, $password, $center, $last_name, $first_name, $promotion, $permissions)
    {
        try {
        $connexion = getDatabaseConnexion();
                   
        $requete = $connexion->prepare("INSERT INTO table_of_users (login, password, first_name, last_name, center, promotion, permissions)
        VALUES (:login, :password, :first_name, :last_name, :center, :promotion, :permissions);
        INSERT INTO possessing (id_promotion)
        VALUES (3)");


    
        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->bindParam(':first_name', $first_name);
        $requete->bindParam(':last_name', $last_name);
        $requete->bindParam(':center', $center);
        $requete->bindParam(':promotion', $promotion);
        $requete->bindParam(':permissions', $permissions);

        if(!empty($_POST['save']))
        {
        $requete->execute();
        }
    }
    catch(PDOException $e)
    {
        echo $requete. "<br>". $e->getMessage();
    }

        
        
    }


function CreatePilot($login, $password, $first_name, $last_name, $center, $promotion)
    {
        try {
            $connexion = getDatabaseConnexion();
                       
            $requete = $connexion->prepare("INSERT INTO table_of_users (login, password, first_name, last_name, center, promotion, permissions)
            VALUES (:login, :password, :first_name, :last_name, :center, :promotion, :permissions);
            INSERT INTO possessing (id_promotion)
            VALUES (2)");
    
    
        
            $requete->bindParam(':login', $login);
            $requete->bindParam(':password', $password);
            $requete->bindParam(':first_name', $first_name);
            $requete->bindParam(':last_name', $last_name);
            $requete->bindParam(':center', $center);
            $requete->bindParam(':promotion', $promotion);
            $requete->bindParam(':permissions', $permissions);
    
            if(!empty($_POST['save']))
            {
            $requete->execute();
            }
        }
        catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }


function CreateOffer($skills, $street_number, $street_name, $city, $postal_code, $company_name, $promotions, $start_date, $end_date, $salary, $offer_date, $nb_available)
    {
        try {
        $connexion = getDatabaseConnexion();

        
        $requete = $connexion->prepare( "INSERT INTO internships (skills, street_number, street_name, city, postal_code, company_name, promotions, start_date, end_date, salary, offer_date, nb_available)
                    VALUES (:skills, :street_number, :street_name, :city, :postal_code, :company_name, :promotions, :start_date, :end_date, :salary, :offer_date, :nb_available);");
        $requete->bindParam(':skills', $skills);
        $requete->bindParam(':street_number', $street_number);
        $requete->bindParam(':street_name', $street_name);
        $requete->bindParam(':city', $city);
        $requete->bindParam(':postal_code', $postal_code);
        $requete->bindParam(':company_name', $company_name);
        $requete->bindParam(':promotions', $promotions);
        $requete->bindParam(':start_date', $start_date);
        $requete->bindParam(':end_date', $end_date);
        $requete->bindParam(':salary', $salary);
        $requete->bindParam(':offer_date', $offer_date);
        $requete->bindParam(':nb_available', $nb_available);
        
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }
    

function CreateStudent($login, $password, $first_name, $last_name, $center, $promotion)
    {
        try {
            $connexion = getDatabaseConnexion();
                       
            $requete = $connexion->prepare("INSERT INTO table_of_users (login, password, first_name, last_name, center, promotion, permissions)
            VALUES (:login, :password, :first_name, :last_name, :center, :promotion, :permissions);
            INSERT INTO possessing (id_promotion)
            VALUES (4)");
    
    
        
            $requete->bindParam(':login', $login);
            $requete->bindParam(':password', $password);
            $requete->bindParam(':first_name', $first_name);
            $requete->bindParam(':last_name', $last_name);
            $requete->bindParam(':center', $center);
            $requete->bindParam(':promotion', $promotion);
            $requete->bindParam(':permissions', $permissions);
    
            if(!empty($_POST['save']))
            {
            $requete->execute();
            }
        }
        catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    
function readPilot($First_Name_Pilot, $Last_Name_Pilot) 
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = "SELECT * FROM pilots WHERE first_name = '$First_Name_Pilot' and last_name = '$Last_Name_Pilot';";
        
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

function readCompany($Company_Name) 
    {
        try {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM company2 WHERE company_name = '$Company_Name';";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

function readOffer($id_internship) //sert à trouver le Pilot
    {
        try {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM internship2 WHERE id_internship = '$id_internship'";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }
        catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }

        echo $requete;
    }

function getAllPilots()
    {
        
        $connexion = getDatabaseConnexion();
        $requete = 'Select * from pilote';
        $row = $connexion->query($requete);
        return $row;
    }

function readRepresentative($First_Name_Representative, $Last_Name_Representative) 
    {
        try {
        $connexion = getDatabaseConnexion();

        $requete = "SELECT * FROM users INNER JOIN possessing ON users.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = 'representative' and first_name = '$First_Name_Representative' and last_name = '$Last_Name_Representative';";
        
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
        echo $requete;
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }

    }

    function readStudent($First_Name_Student, $Last_Name_Student)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = "SELECT * FROM students WHERE first_name = '$First_Name_Student' and last_name = '$Last_Name_Student';";
        
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function CreateCompany($company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $id_place, $street_number, $street_name, $city, $postal_code)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        
        $requete = $connexion->prepare("INSERT INTO company2 (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available, id_place, street_number, street_name, city, postal_code)
                    VALUES (:company_name, :company_sector, :nb_CESI_intern, :interns_evaluation, :Pilote_trust, :internship_nb_available, :id_place, :street_number, :street_name, :city, :postal_code);");
        
        $requete->bindParam(':company_name', $company_name);
        $requete->bindParam(':company_sector', $company_sector);
        $requete->bindParam(':nb_CESI_intern', $nb_CESI_intern);
        $requete->bindParam(':interns_evaluation', $interns_evaluation);
        $requete->bindParam(':Pilote_trust', $Pilote_trust);
        $requete->bindParam(':internship_nb_available', $internship_nb_available);
        $requete->bindParam(':id_place', $id_place);
        $requete->bindParam(':street_number', $street_number);
        $requete->bindParam(':street_name', $street_name);
        $requete->bindParam(':city', $city);
        $requete->bindParam(':postal_code', $postal_code);
        
        if(isset($_POST['save']))
        { 
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function updateCompany($id_company, $company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $id_place, $street_number, $street_name, $city, $postal_code)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("UPDATE company2 
                    SET company_name = :company_name, 
                    company_sector = :company_sector, 
                    nb_CESI_intern = :nb_CESI_intern, 
                    interns_evaluation = :interns_evaluation,
                    Pilote_trust = :Pilote_trust, 
                    internship_nb_available = :internship_nb_available, 
                    id_place = :id_place, 
                    street_number = :street_number, 
                    street_name = :street_name, 
                    city = :city, 
                    postal_code = :postal_code
                    WHERE id_company = :id_company");

        $requete->bindParam(':company_name', $company_name);
        $requete->bindParam(':company_sector', $company_sector);
        $requete->bindParam(':nb_CESI_intern', $nb_CESI_intern);
        $requete->bindParam(':interns_evaluation', $interns_evaluation);
        $requete->bindParam(':Pilote_trust', $Pilote_trust);
        $requete->bindParam(':internship_nb_available', $internship_nb_available);
        $requete->bindParam(':id_place', $id_place);
        $requete->bindParam(':street_number', $street_number);
        $requete->bindParam(':street_name', $street_name);
        $requete->bindParam(':city', $city);
        $requete->bindParam(':postal_code', $postal_code);
        $requete->bindParam(':id_company', $id_company);
        
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }
    
    function UpdateOffer($id_internship, $skills, $street_number, $street_name, $city, $postal_code, $company_name, $promotions, $start_date, $end_date, $salary, $offer_date, $nb_available)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("UPDATE internship2 SET skills = :skills, street_number = :street_number, street_name = :street_name, city = :city, postal_code = :postal_code,
                    company_name = :company_name, promotions = :promotions, start_date = :start_date, end_date = :end_date, salary = :salary, offer_date = :offer_date, nb_available = :nb_available
                    WHERE id_internship = :id_internship;");

        $requete->bindParam(':skills', $skills);
        $requete->bindParam(':street_number', $street_number);
        $requete->bindParam(':street_name', $street_name);
        $requete->bindParam(':city', $city);
        $requete->bindParam(':postal_code', $postal_code);
        $requete->bindParam(':company_name', $company_name);
        $requete->bindParam(':promotions', $promotions);
        $requete->bindParam(':start_date', $start_date);
        $requete->bindParam(':end_date', $end_date);
        $requete->bindParam(':salary', $salary);
        $requete->bindParam(':offer_date', $offer_date);
        $requete->bindParam(':nb_available', $nb_available);

        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
        }
        catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    

    function updatePilote($id_user, $login, $password, $first_name, $last_name, $center, $promotion)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("UPDATE pilots 
                    SET login = :login, 
                    password = :password, 
                    center = :center,
                    last_name = :last_name, 
                    first_name = :first_name, 
                    promotion = :promotion
                    WHERE id_pilot = :id_user;");

        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->bindParam(':center', $center);
        $requete->bindParam(':last_name', $last_name);
        $requete->bindParam(':first_name', $first_name);
        $requete->bindParam(':promotion', $promotion);
        $requete->bindParam(':id_pilot', $id_pilot);

        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function updateRepresentative($id_representative, $login, $password, $first_name, $last_name, $center, $permissions)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        
        $requete = $connexion->prepare("UPDATE representatives 
                    SET login = :login, 
                    password = :password, 
                    center = :center,
                    last_name = :last_name, 
                    first_name = :first_name,
                    permissions = :permissions
                    WHERE id_representative = :id_representative");

        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->bindParam(':center', $center);
        $requete->bindParam(':last_name', $last_name);
        $requete->bindParam(':first_name', $first_name);
        $requete->bindParam(':permissions', $permissions);
        $requete->bindParam(':id_representative', $id_representative);
        
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function updateStudent($id_user, $login, $password, $first_name, $last_name, $center, $promotion)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        
        $requete =  $connexion->prepare("UPDATE students 
                    SET login = '$login', 
                    password = '$password', 
                    center = '$center',
                    last_name = '$last_name', 
                    first_name = '$first_name', 
                    promotion = '$promotion'
                    WHERE id_student = '$id_user';");

        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->bindParam(':center', $center);
        $requete->bindParam(':last_name', $last_name);
        $requete->bindParam(':first_name', $first_name);
        $requete->bindParam(':promotion', $promotion);
        $requete->bindParam(':id_student', $id_student);
        
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function deleteCompany($id_company)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        
        $requete = $connexion->prepare("DELETE FROM company2 WHERE id_company = :id_company;");

        $requete->bindParam(':id_company', $id_company);
    
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function deleteOffer($id_internship)
    {
        try 
        {
        $connexion = getDatabaseConnexion();

        
        $requete = $connexion->prepare("DELETE FROM internship2 WHERE id_internship = :id_internship");

        $requete->bindParam(':id_internship', $id_internship);
    
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
        }
    catch(PDOException $e)
    {
        echo $requete. "<br>". $e->getMessage();
    }
}

    function deletePilote($id_pilot)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("DELETE FROM pilots WHERE id_pilot = :id_pilot");

        $requete->bindParam(':id_pilot', $id_pilot);

        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function deleteRepresentative($id_representative)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("DELETE FROM representatives WHERE id_representative = :id_representative");

        $requete->bindParam(':id_representative', $id_representative);
    
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

    function deleteStudent($id_student)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = $connexion->prepare("DELETE FROM students WHERE id_student = :id_student");

        $requete->bindParam(':id_student', $id_student);
    
        if(isset($_POST['save']))
        {
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }

function change_step_number1($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 1
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}

function change_step_number2($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 2
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}

function change_step_number3($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 3
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}

function change_step_number4($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 4
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}

function change_step_number5($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 5
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}

function change_step_number6($seeked_application)
{
    try {
        $connexion = getDatabaseConnexion();

        
            $requete = $connexion->prepare("UPDATE application 
                        SET step_number = 6
                        WHERE id_application = :seeked_application;");

            $requete->bindParam(':seeked_application', $seeked_application);            

        if(isset($_POST['save']))
        {
            $connexion->exec($requete);
        }
    } 
    catch (PDOException $e) 
        {
        echo $requete. "<br>". $e->getMessage();
        }
}
?> 