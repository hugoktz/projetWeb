<?php

function getDatabaseConnexion()
    {
        try {
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=127.0.0.1;dbname=prosit7', $user, $pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    function CreateCompany($Company_Name, $Company_Sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available)
    {
        
        $connexion = getDatabaseConnexion();
        
        $requete = "INSERT INTO company (company_name, company_sector, nb_CESI_intern, interns_evaluation, Pilote_trust, internship_nb_available)
                    VALUES ($Company_Name, $Company_Sector, $nb_CESI_intern, $interns_evaluation, $Pilote_trust, $internship_nb_available)";

        $connexion->exec($requete);
    }

    function CreateOffer($Internship_skills, $Internship_company, $Internship_type_promotion, $Internship_salary, $Internship_offer_date, $Application_validation_sheet, $Application_internship_agreement, $internship_date_start, $internship_date_end)
    {
        $connexion = getDatabaseConnexion();

        $requete = "INSERT INTO internship (internship_skills, internship_company, internship_type_promotion, internship_salary, internship_offer_date, application_validation_sheet, application_internship_agreement, internship_date_start, internship_end_start)
                    VALUES ($Internship_skills, $Internship_company, $Internship_type_promotion, $Internship_salary, $Internship_offer_date, $Application_validation_sheet, $Application_internship_agreement, $internship_date_start, $internship_date_end)";
        
    }

    function CreatePilot($login, $password, $promotion, $center, $last_name, $first_name)
    {
        $connexion = getDatabaseConnexion();
        
        $requete = "INSERT INTO user (login, password, promotion, center, last_name, first_name)
                        VALUES ($login, $password, $promotion, $center, $last_name, $first_name)";
        
        $connexion->exec($requete);
    }

    function CreateRepresentative()
    {
        
    }

    function CreateStudent()
    {
        
    }


    function readCompany($Company_Name) //sert à trouver le Pilot
    {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM company WHERE Company_Name = $Company_Name";
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
        $requete = "SELECT * FROM internship WHERE id_internship = $id_internship";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }

        echo $requete;
    }

    function readPilot($First_Name_Pilot, $Last_Name_Pilot) //sert à trouver le Pilot
    {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM user INNER JOIN possessing ON user.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = pilot and First_Name_Pilot = $First_Name_Pilot and Last_Name_Pilot = $Last_Name_Pilot";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }

        echo $requete;
    }

    function readRepresentative($First_Name_Representative, $Last_Name_Representative) //sert à trouver le Pilot
    {
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM user INNER JOIN possessing ON user.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = pilot and First_Name_Representative = $First_Name_Representative and Last_Name_Representative = $Last_Name_Representative";
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
        $requete = "SELECT * FROM user INNER JOIN possessing ON user.id_user = possessing.id_user INNER JOIN roles 
        ON possessing.id_role = roles.id_role WHERE role_name = pilot and First_Name_Student = $First_Name_Student and Last_Name_Student = $Last_Name_Student";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }

        echo $requete;
    }

?>