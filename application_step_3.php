<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inform the system that an application has reached the third step</h1>


    <form method = "POST" action="">
    <br>
        Which application? <br> <input type="text" name="application_name"/>
        <br><br>        
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        include 'database_connexion.php';
        $connexion = getDatabaseConnexion();
        if(!empty($_POST['application_name']))
        {
            $application_name = $_POST['application_name'];
            

            $create_company = change_step_number3($application_name);
            
        }
    
    ?>

    
</body>
</html>