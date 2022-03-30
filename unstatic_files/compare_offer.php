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
            <h2>Compare offers</h2>

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

            $query = "SELECT internship_skills, internship_type_promotion, internship_salary, internship_offer_date, duration, company.internship_nb_available, street_number, street_name, city, postal_code FROM internship 
            INNER JOIN company
            ON internship.id_company = company.id_company
            INNER JOIN being_located_in
            ON company.id_company = being_located_in.id_company
            INNER JOIN places
            ON being_located_in.id_place = places.id_place
            WHERE $characteristic = '$value';";

            $query_run = mysqli_query($connection, $query);
?>
<table class = "table table-bordered" style="background-color: white;">
    <thead class="table-dark">
        <tr>
            <th>Skills</th>
            <th>Promotion</th>
            <th>Salary</th>
            <th>Offer date</th>
            <th>Duration (in days)</th>
            <th>Number of places available</th>
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
                        <th> <?php echo $row['internship_skills'];?> </th>
                        <th> <?php echo $row['internship_type_promotion'];?> </th>
                        <th> <?php echo $row['internship_salary'];?> </th>
                        <th> <?php echo $row['internship_offer_date'];?> </th>
                        <th> <?php echo $row['duration'];?> </th>
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