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

    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title">
                <span class = "login100-form-title-1">
                    Sign in
                </span>
            </div>


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
    </div>
</div>