<?php

function getDatabaseConnexion()
    {
        try {
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=127.0.0.1;dbname=web_project_try_5', $user, $pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function CreateOffer($Internship_skills, $Internship_company, $Internship_type_promotion, $Internship_salary, $Internship_offer_date, $Application_validation_sheet, $Application_internship_agreement, $internship_date_start, $internship_date_end)
    {
        $connexion = getDatabaseConnexion();

        $requete = "INSERT INTO internship (internship_skills, internship_company, internship_type_promotion, internship_salary, internship_offer_date, application_validation_sheet, application_internship_agreement, internship_date_start, internship_end_start)
                    VALUES ($Internship_skills, $Internship_company, $Internship_type_promotion, $Internship_salary, $Internship_offer_date, $Application_validation_sheet, $Application_internship_agreement, $internship_date_start, $internship_date_end)";
        
    }

    function CreatePilot($login, $password, $center, $last_name, $first_name, $id_company, $promotion)
    {
        $connexion = getDatabaseConnexion();
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO users2 (login, password, center, last_name, first_name, id_company, promotion, role_name)
        VALUES ('$login',
        '$password',
        '$center',
        '$last_name',
        '$first_name',
        '$id_company',
        '$promotion',
        'pilot');";
        $connexion->exec($requete);
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

    function CreateRepresentative($login, $password, $center, $last_name, $first_name, $id_company, $promotion)
    {
        $connexion = getDatabaseConnexion();
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO users2 (login, password, center, last_name, first_name, id_company, promotion, role_name)
        VALUES ('$login',
        '$password',
        '$center',
        '$last_name',
        '$first_name',
        '$id_company',
        '$promotion',
        'representative');";
        $connexion->exec($requete);
        }
    }

    function CreateStudent($login, $password, $center, $last_name, $first_name, $id_company, $promotion)
    {
        $connexion = getDatabaseConnexion();
        
        if(isset($_POST['save']))
        {
        $requete = "INSERT INTO users2 (login, password, center, last_name, first_name, id_company, promotion, role_name)
        VALUES ('$login',
        '$password',
        '$center',
        '$last_name',
        '$first_name',
        '$id_company',
        '$promotion',
        'student');";
        $connexion->exec($requete);
        }
    }


    function readCompany($Company_Name) 
    {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM company WHERE company_name = '$Company_Name';";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }
    
    function readPilot($First_Name_Pilot, $Last_Name_Pilot) 
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "SELECT * FROM users INNER JOIN possessing ON users.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = 'pilot' and first_name = '$First_Name_Pilot' and last_name = '$Last_Name_Pilot';";
        
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
        echo $requete;
    }

    function readOffer($id_internship) //sert à trouver le Pilot
    {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM internship WHERE id_internship = '$id_internship'";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
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

    function readStudent($First_Name_Student, $Last_Name_Student) //sert à trouver le Pilot
    {
        $connexion = getDatabaseConnexion();

        $requete = "SELECT * FROM users INNER JOIN possessing ON users.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = 'student' and first_name = '$First_Name_Student' and last_name = '$Last_Name_Student';";
        
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    }

    function CreateCompany($company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $id_place, $street_number, $street_name, $city, $postal_code)
    {
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

    function updateCompany($id_company, $company_name, $company_sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available, $id_place, $street_number, $street_name, $city, $postal_code)
    {
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
    
    function updateOffer($id_internship, $Internship_skills, $Internship_company, $Internship_type_promotion, $Internship_salary, $Internship_offer_date, $Application_validation_sheet, $Application_internship_agreement, $internship_date_start, $internship_date_end, $id_company)
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "UPDATE internship SET id_internship = $id_internship, Internship_skills = $Internship_skills, Internship_company = $Internship_company, Internship_type_promotion = $Internship_type_promotion, Internship_salary = $Internship_salary, Internship_offer_date = $Internship_offer_date,
                    Application_validation_sheet = $Application_validation_sheet, Application_internship_agreement = $Application_internship_agreement, internship_date_start = $internship_date_start, internship_date_end = $internship_date_end, id_company = $id_company";
        $connexion->exec($requete);
    }

    function updatePilote($id_user, $login, $password, $promotion, $center, $last_name, $first_name)
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "UPDATE company SET login = $login, password = $password, promotion = $promotion, center = $center, last_name = $last_name, first_name = $first_name)
                    WHERE id_user = $id_user";
        
        $connexion->exec($requete);
    }

    function updateRepresentative($id_user, $login, $password, $promotion, $center, $last_name, $first_name)
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "UPDATE company SET login = $login, password = $password, promotion = $promotion, center = $center, last_name = $last_name, first_name = $first_name)
                    WHERE id_user = $id_user";
        
        $connexion->exec($requete);
    }

    function updateStudent($id_user, $login, $password, $promotion, $center, $last_name, $first_name)
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "UPDATE company SET login = $login, password = $password, promotion = $promotion, center = $center, last_name = $last_name, first_name = $first_name)
                    WHERE id_user = $id_user";
        
        $connexion->exec($requete);
    }

    function deleteCompany($id_company)
    {
        $connexion = getDatabaseConnexion();

        $requete = "DELETE FROM company WHERE id_company = $id_company";
    
        $connexion->exec($requete);
    }

    function deleteOffer($id_internship)
    {
        $connexion = getDatabaseConnexion();

        $requete = "DELETE FROM internship WHERE id_internship = $id_internship";
    
        $connexion->exec($requete);
    }

    function deletePilote($id_user)
    {
        $connexion = getDatabaseConnexion();

        $requete = "DELETE FROM users WHERE id_user = $id_user";
    
        $connexion->exec($requete);
    }

    function deleteRepresentative($id_user)
    {
        $connexion = getDatabaseConnexion();

        $requete = "DELETE FROM users WHERE id_user = $id_user";
    
        $connexion->exec($requete);
    }

    function deleteStudent($id_user)
    {
        $connexion = getDatabaseConnexion();

        $requete = "DELETE FROM users WHERE id_user = $id_user";
    
        $connexion->exec($requete);
    }

?>