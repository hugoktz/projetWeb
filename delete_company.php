<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete a company account</h1>


    <form method = "GET" action="">
    <br>
        Company id <br> <input type="text" name="id_company"/>
        <br><br>
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        $connexion = mysqli_connect("127.0.0.1","root","","web_project_try_4") or die("Connection failed");
        if(!empty($_POST['save']))
        {
            $id_company = $_POST['id_company'];
            $sql = "DELETE FROM company 
                    WHERE id_company = '$id_company';";

            $result = mysqli_query($connect, $sql);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                $connexion->PDO::exec($sql);
            }
        }