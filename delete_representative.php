<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete a student account</h1>


    <form method = "GET" action="">
    <br>
        Company id <br> <input type="text" name="id_user"/>
        <br><br>
        
        <input type="submit" name="save" value="submit"/>
    </form>

    <?php
        $connexion = mysqli_connect("127.0.0.1","root","","web_project_try_4") or die("Connection failed");
        if(!empty($_POST['save']))
        {
            $id_user = $_POST['id_user'];
            $sql = "DELETE us FROM user AS us 
                    LEFT JOIN possessing AS po
                    ON us.id_user = po.id_user
                    LEFT JOIN roles AS ro
                    ON po.id_role = ro.id_role
                    WHERE us.id_user = $id_user
                    AND ro.role_name = 'representative';";

            $result = mysqli_query($connect, $sql);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                $connexion->PDO::exec($sql);
            }
        }