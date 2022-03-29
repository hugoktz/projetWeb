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

function CompareCompany($data, $value)
{
    $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM company WHERE $data = '$value'";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }

        $compteur = count($stmt);

        for ($i = 0; $i < $compteur; $i++)
        {
            echo $requete[$i];
        }
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

function readCompany($Company_Name) 
    {
       
        $connexion = getDatabaseConnexion();
        $requete = "SELECT * FROM company WHERE company_name = '$Company_Name'";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
    
    
    }

function readOffer($id_internship) //sert à trouver le Pilot
    {
        
        $connexion = getDatabaseConnexion();
        $requete = "SELECT internship_skills, street_number, street_name, city, postal_code, company_name, internship_duration, internship_salary, internship_offer_date, company.internship_nb_available FROM internship 
        INNER JOIN company
        ON internship.id_company = company.id_company
        INNER JOIN being_located_in
        ON company.id_company = being_located_in.id_company
        INNER JOIN places
        ON being_located_in.id_place = places.id_place
        WHERE id_internship = $id_internship;";
        $stmt = $connexion->query($requete);  
        $row = $stmt->fetchAll();
        if (!empty($row))
        {
            return $row[0];
        }
        
    }


function readPilot($First_Name_Pilot, $Last_Name_Pilot) 
   {
    try {
      $connexion = getDatabaseConnexion();
      $requete = "SELECT * FROM users WHERE first_name = '$First_Name_Pilot' and last_name = '$Last_Name_Pilot'";
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

function getAllPilots()
   {
            
      $connexion = getDatabaseConnexion();
      $requete = 'Select * from users';
      $row = $connexion->query($requete);
      return $row;
   }     

function readStudent($First_Name_Student, $Last_Name_Student)
    {
        try {
        $connexion = getDatabaseConnexion();
        
        $requete = "SELECT * FROM users WHERE first_name = '$First_Name_Student' and last_name = '$Last_Name_Student';";
        
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
    