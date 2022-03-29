<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Compare companies account</h1>
    <div class="container">
    <form method = "POST">
        <label>Which characteristics?</label> <br> <input type="text" name="characteristic"/>
        <br><br>
        <label>Which value?</label> <br> <input type="text" name="value"/>
        <br><br>

        <input type="submit" name="insert" value="submit"/>
        <br>
    </form>
</div>

    <?php

    include 'database_connexion.php';
    error_reporting(0);
    $connexion = getDatabaseConnexion();

    if(isset($_POST['insert']) and !$connexion)
    {
        $characteristic = $_POST['characteristic'];
        $value = $_POST['value'];

        $requete = "SELECT * FROM company WHERE $data = '$value'";
        
        $result = mysqli_query($connexion, $requete);

        $companies = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        mysqli_close($connexion);
        
        print_r($companies);         
    }
    ?>

    <?php include('templates/header.php'); ?>

    <h2 class="center grey-text">Companies</h2>

    <div class="container">
        <div class="row">

            <?php foreach($companies as $company){ ?>
            
                <h6><?php echo htmlspecialchars($company['company_name']); ?></h6>
                <h6><?php echo htmlspecialchars($company['company_sector']); ?></h6>
                <h6><?php echo htmlspecialchars($company['nb_CESI_intern']); ?></h6>
                <h6><?php echo htmlspecialchars($company['interns_evaluation']); ?></h6>
                <h6><?php echo htmlspecialchars($company['number_of_grades']); ?></h6>
                <h6><?php echo htmlspecialchars($company['Pilote_trust']); ?></h6>
                <h6><?php echo htmlspecialchars($company['internship_nb_available']); ?></h6>

            <?php } ?>


        </div>

    </div>


</body>
</html>