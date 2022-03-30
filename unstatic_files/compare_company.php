<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Compare companies</h2>

            <form method="POST" action="">
                <br>
            Which characteristics? <br> <input type = "text" name = "characteristic"/>
            <br><br>
            Which value? <br> <input type = "text" name = "value"/>
            <br><br>


            <input type = "submit" name = "save" value="submit"/>
            </form>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'web_project_try_5');


            $characteristic = $_POST['characteristic'];
            $value = $_POST['value'];

            $query = "SELECT company_name, company_sector, nb_CESI_intern, interns_evaluation, number_of_grades, Pilote_trust, internship_nb_available, street_number, street_name, city, postal_code
            FROM company 
            INNER JOIN being_located_in
            ON company.id_company = being_located_in.id_company
            INNER JOIN places
            ON being_located_in.id_place = places.id_place
            WHERE $characteristic = '$value'";

            $query_run = mysqli_query($connection, $query);
?>
<table class = "table table-bordered" style="background-color: white;">
    <thead class="table-dark">
        <tr>
            <th> Name </th>
            <th> Sector</th>
            <th>nb CESI interns</th>
            <th>Interns Evaluation</th>
            <th>Number of grades</th>
            <th>Pilote trust</th>
            <th>Number Available</th>
            <th>Street number</th>
            <th>Street name</th>
            <th>City</th>
            <th>Postal code</th>
        </tr>

    </thead>

<?php
            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tbody>
                        <tr>
                        <th> <?php echo $row['company_name'];?> </th>
                        <th> <?php echo $row['company_sector'];?> </th>
                        <th> <?php echo $row['nb_CESI_intern'];?> </th>
                        <th> <?php echo $row['interns_evaluation'];?> </th>
                        <th> <?php echo $row['number_of_grades'];?> </th>
                        <th> <?php echo $row['Pilote_trust'];?> </th>
                        <th> <?php echo $row['internship_nb_available'];?> </th>
                        <th> <?php echo $row['street_number'];?> </th>
                        <th> <?php echo $row['street_name'];?> </th>
                        <th> <?php echo $row['city'];?> </th>
                        <th> <?php echo $row['postal_code'];?> </th>
                    </tr>    
                </tbody>
                    <?php
                }
            }
            else
            {
                echo "No Record Found";
            }


?>
        </div>
    </div>
    
</body>
</html>