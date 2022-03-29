<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read a company account</h1>
    <div class="container">
    <form method = "POST">
        <label>Which characteristics</label> <br> <input type="text" name="characteristic"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
        <br>
    </form>
</div>

    <?php

    include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']))
    {
        $characteristic = $_POST['characteristic'];

        $read_company = readCompany($characteristic);
        
        for ($i=0; $i < 7; $i++) { 
            echo $read_company[$i]." "."/"." ";
            
        }
    }


    ?>



</body>
</html>