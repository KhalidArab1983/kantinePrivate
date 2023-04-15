<?php

session_start();
session_destroy();
header("location:login-form.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        body{
            background-image: url('images/kueche.jpg');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: gold;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-expand-md bg-primary navbar-dark text-white">
        <div class="container">
            <a href="index.php" class="navbar-brand">Kantine BFW</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="login-form.php" class="nav-link">Anmelden</a></li>
                    <li class="nav-item"><a href="registration-form.php" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Ausloggen</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>

