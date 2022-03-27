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

    <div class="container">
    <form method = "POST" action="">
    <br>
        <label>Pilot login</label> <br> <input type="text" name="pilot_login"/>
        <br><br>
        <label>Pilot password</label> <br> <input type="text" name="pilot_password"/>
        <br><br>
        <label>Pilot firstname</label> <br> <input type="text" name="pilot_firstname"/>
        <br><br>
        <label>Pilot lastname</label> <br> <input type="text" name="pilot_lastname"/>
        <br><br>
        <label>Pilot center</label> <br> <input type = "text" name = "pilot_center"/>
        <br><br>
        <label>Pilot promotions</label> <br> <input type = "text" name = "id_promotion"/>
        <br><br>  
        
        <?php echo md5('syhe') ?>
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        error_reporting(0);
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $pilot_login = $_POST['pilot_login'];
            $pilot_password = $_POST['pilot_password'];
            $pilot_firstname = $_POST['pilot_firstname'];
            $pilot_lastname = $_POST['pilot_lastname'];
            $pilot_center = $_POST['pilot_center'];
            $id_promotion = $_POST['id_promotion'];
            $encpassword = md5('$pilot_password');

            $requete = $connexion->prepare("INSERT INTO users (login, password, center, last_name, first_name, id_company, id_promotion)
            VALUES (?, ?, ?, ?, ?, ?, ?);
            INSERT INTO possessing (id_role, id_users)
            SELECT roles.id_role, users.id_users
            FROM users, roles
            WHERE users.last_name = ? and roles.role_name = 'pilot';");

            $requete->execute(array($pilot_login, $encpassword, $pilot_center, $pilot_lastname, $pilot_firstname, 12, $id_promotion, $pilot_lastname));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>