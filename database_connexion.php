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