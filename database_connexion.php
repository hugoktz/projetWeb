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

function CreateRepresentative($login, $password, $first_name, $last_name, $center, $permissions)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO representatives (login, password, first_name, last_name, center, permissions)
        VALUES ('$login',
        '$password',
        '$first_name',
        '$last_name',
        '$center',
        '$permissions');";
        $connexion->exec($requete);
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
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO pilots (login, password, first_name, last_name, center, promotion)
                    VALUES ('$login',
                        '$password',
                        '$first_name',
                        '$last_name',
                        '$center',
                        '$promotion');";
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }


function CreateOffer($skills, $street_number, $street_name, $city, $postal_code, $company_name, $promotions, $start_date, $end_date, $salary, $offer_date, $nb_available)
    {
        try {
        $connexion = getDatabaseConnexion();

        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO internship2 (skills, street_number, street_name, city, postal_code, company_name, promotions, start_date, end_date, salary, offer_date, nb_available)
                    VALUES ('$skills', 
                            '$street_number',
                            '$street_name', 
                            '$city', 
                            '$postal_code', 
                            '$company_name',
                            '$promotions',
                            '$start_date',
                            '$end_date',
                            '$salary',
                            '$offer_date',
                            '$nb_available');";
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }
    /*
    SELECT login, password, center, last_name, first_name, id_company, promotions.promotion, roles.role_name 
    FROM `users` 
    INNER JOIN possessing 
    ON users.id_user = possessing.id_user 
    INNER JOIN roles 
    ON possessing.id_role = roles.id_role 
    INNER JOIN being_in_charge_of 
    ON users.id_user = being_in_charge_of.id_user 
    INNER JOIN promotions 
    ON being_in_charge_of.id_promotion = promotions.id_promotion 
    WHERE roles.role_name = 'pilot';

    INSERT INTO pilots (id_pilot, login, password, first_name, last_name, center, promotion)
SELECT users.id_user, login, password, first_name, last_name, center, promotions.promotion
FROM users
INNER JOIN possessing 
        ON users.id_user = possessing.id_user 
        INNER JOIN roles 
        ON possessing.id_role = roles.id_role 
        INNER JOIN being_in_charge_of 
        ON users.id_user = being_in_charge_of.id_user 
        INNER JOIN promotions 
        ON being_in_charge_of.id_promotion = promotions.id_promotion 
        WHERE roles.role_name = 'pilot';

INSERT INTO users2 (users.id_user, login, password, center, last_name, first_name, id_company, promotion, role_name)
SELECT users.id_user, login, password, center, last_name, first_name, id_company, promotions.promotion, roles.role_name
FROM users
INNER JOIN possessing 
        ON users.id_user = possessing.id_user 
        INNER JOIN roles 
        ON possessing.id_role = roles.id_role 
        INNER JOIN being_in_charge_of 
        ON users.id_user = being_in_charge_of.id_user 
        INNER JOIN promotions 
        ON being_in_charge_of.id_promotion = promotions.id_promotion 
        WHERE roles.role_name = 'pilot';

    */

function CreateStudent($login, $password, $first_name, $last_name, $center, $promotion)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO students (login, password, first_name, last_name, center, promotion)
                    VALUES ('$login',
                        '$password',
                        '$first_name',
                        '$last_name',
                        '$center',
                        '$promotion');";
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
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
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO company2 (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available, id_place, street_number, street_name, city, postal_code)
                    VALUES ('$company_name',
					'$company_sector',
                    '$nb_CESI_intern',
                    '$interns_evaluation',
                    '$Pilote_trust',
                    '$internship_nb_available',
                    '$id_place',
                    '$street_number',
                    '$street_name',
                    '$city',
                    '$postal_code');";

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
        
        if(isset($_POST['save']))
        {
        $requete = "UPDATE company2 
                    SET company_name = '$company_name', 
                    company_sector = '$company_sector', 
                    nb_CESI_intern = $nb_CESI_intern, 
                    interns_evaluation = $interns_evaluation,
                    Pilote_trust = $Pilote_trust, 
                    internship_nb_available = $internship_nb_available, 
                    id_place = $id_place, 
                    street_number = $street_number, 
                    street_name = '$street_name', 
                    city = '$city', 
                    postal_code = $postal_code
                    WHERE id_company = $id_company";
        
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
        
        $requete = "UPDATE internship2 SET skills = '$skills', street_number = '$street_number', street_name = '$street_name', city = '$city', postal_code = '$postal_code',
                    company_name = '$company_name', promotions = '$promotions', start_date = '$start_date', end_date = '$end_date', salary = $salary, offer_date = '$offer_date', nb_available = $nb_available
                    WHERE id_internship = $id_internship;";
        $connexion->exec($requete);
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
        
        if(isset($_POST['save']))
        {
        $requete = "UPDATE pilots 
                    SET login = '$login', 
                    password = '$password', 
                    center = '$center',
                    last_name = '$last_name', 
                    first_name = '$first_name', 
                    promotion = '$promotion'
                    WHERE id_pilot = '$id_user'; ";
        
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
        
        if(isset($_POST['save']))
        {
        $requete = "UPDATE representatives 
                    SET login = '$login', 
                    password = '$password', 
                    center = '$center',
                    last_name = '$last_name', 
                    first_name = '$first_name',
                    permissions = '$permissions'
                    WHERE id_representative = '$id_representative'";
        
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
        
        if(isset($_POST['save']))
        {
        $requete = "UPDATE students 
                    SET login = '$login', 
                    password = '$password', 
                    center = '$center',
                    last_name = '$last_name', 
                    first_name = '$first_name', 
                    promotion = '$promotion'
                    WHERE id_student = '$id_user'; ";
        
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
        
        if(isset($_POST['save']))
        {
        $requete = "DELETE FROM company2 WHERE id_company = '$id_company';";
    
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

        if(isset($_POST['save']))
        {
        $requete = "DELETE FROM internship2 WHERE id_internship = $id_internship";
    
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

        if(isset($_POST['save']))
        {
        $requete = "DELETE FROM pilots WHERE id_pilot = $id_pilot";

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

        if(isset($_POST['save']))
        {
        $requete = "DELETE FROM representatives WHERE id_representative = $id_representative";
    
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

        if(isset($_POST['save']))
        {
        $requete = "DELETE FROM students WHERE id_student = $id_student";
    
        $connexion->exec($requete);
        }
    }
    catch(PDOException $e)
        {
            echo $requete. "<br>". $e->getMessage();
        }
    }


?> 