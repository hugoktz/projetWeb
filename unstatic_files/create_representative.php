<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a representative account</h1>

    <div class="container">
    <form method = "POST" action="">
    <br>
        <label>Representative login</label> <br> <input type="text" name="representative_login"/>
        <br><br>
        <label>Representative password</label> <br> <input type="text" name="representative_password"/>
        <br><br>
        <label>Representative firstname</label> <br> <input type="text" name="representative_firstname"/>
        <br><br>
        <label>Representative lastname</label> <br> <input type="text" name="representative_lastname"/>
        <br><br>
        <label>Representative center</label> <br> <input type = "text" name = "representative_center"/>
        <br><br>
        <label>Representative promotion</label> <br> <input type = "text" name = "representative_promotion"/>
        <br><br>
        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(isset($_POST['save']))
        {
            $representative_login = $_POST['representative_login'];
            $representative_password = $_POST['representative_password'];
            $representative_firstname = $_POST['representative_firstname'];
            $representative_lastname = $_POST['representative_lastname'];
            $representative_center = $_POST['representative_center'];
            $representative_promotion = $_POST['representative_promotion'];
            $encpassword = md5($representative_password);

            $requete = $connexion->prepare("INSERT INTO users (login, password, center, last_name, first_name, id_company, id_promotion)
            VALUES (?, ?, ?, ?, ?, ?, ?);
            INSERT INTO possessing (id_role, id_user)
            SELECT roles.id_role, users.id_user
            FROM users, roles
            WHERE users.last_name = ? and roles.role_name = 'representative';");

            $requete->execute(array($representative_login, $encpassword, $representative_center, $representative_lastname, $representative_firstname, 12, $representative_promotion, $representative_lastname));
            $connexion->exec($requete);
        }
    
    ?>

    
</body>
</html>