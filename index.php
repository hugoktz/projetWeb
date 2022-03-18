<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="effets.js"></script>
</head>
<body>

<div class="limiter">
    
    <form class="login100-form validate-form" method="POST" action = "">
        <div class="wrap-input100 validate-input m-b-26" data-validate="E-mail is required">
            <span class = "label-input100">E-mail</span>
            <input class = "input100" type="text" name="login" placeholder="Enter e-mail">
            <span class = "focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
            <span class = "label-input100">Password</span>
            <input class = "input100" type="password" name="password" placeholder="Enter password">
            <span class = "focus-input100"></span>
        </div>

        <div class = "container-login100-form-btn">
            <button class = "login100-form-btn" name="submit">
                Login
            </button>
        </div>


    </form>
</div>



<!--
<h2>Connect</h2>

    <div class="container">
    <form method="POST" action="">

    <label>Login</label><br>
    <input type = "text" class="txt" name="Loginn" placeholder="Enter a Login"/><br><br>


    <label>Password</label><br>
    <input type = "text" class="txt" name="Passwordd" placeholder="Enter a Password"/><br><br>


    <input type="submit" name="insert" value="INSERT DATA"/>


</form>
</div>
-->

</body>
</html>