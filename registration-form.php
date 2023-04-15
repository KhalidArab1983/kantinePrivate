<?php

include './inc/validate-script.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Kantine BFW Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <!--bootstrap4 library linked-->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="login-form.php" class="nav-link">Anmelden</a></li>
                    <li class="nav-item"><a href="registration-form.php" class="nav-link">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">

                <!--====registration form====-->
                <div class="registration-form validation-form">
                    <h4 class="text-center">Ein neues Konto erstellen</h4>

                    <p class="text-danger text-center"><?php echo $register; ?></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myForm" method="post">


                        <!--//first name//-->
                        <div class="form-group">
                            <label for="email">Vorname:</label>
                            <input type="text" class="form-control" placeholder="Geben Sie den Vornamen ein"
                                id="firstName" name="first_name" value="<?php echo $set_firstName;?>">
                            <p class="err-msg">
                                <?php if($fnameErr!=1){ echo $fnameErr; }?>
                            </p>
                        </div>

                        <!--//Last name//-->
                        <div class="form-group">
                            <label for="email">Nachname:</label>
                            <input type="text" class="form-control" placeholder="Geben Sie den Nachnamen ein"
                                id="lastName" name="last_name" value="<?php echo $set_lastName;?>">
                            <p class="err-msg">
                                <?php if($lnameErr!=1){ echo $lnameErr; } ?>
                            </p>
                        </div>

                        <!--// Email//-->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email"
                                placeholder="Geben Sie eine gültige E-Mail ein" name="email"
                                value="<?php echo $set_email;?>">
                            <p class="err-msg">
                                <?php if($emailErr!=1){ echo $emailErr; } ?>
                            </p>
                        </div>

                        <!--//Password//-->
                        <div class="form-group">
                            <label for="pwd">Passwort:</label>
                            <input type="password" class="form-control" placeholder="Geben Sie ein Passwort ein"
                                id="password" name="password">
                            <p class="err-msg">
                                <?php if($passErr!=1){ echo $passErr; } ?>
                            </p>
                        </div>

                        <!--//Confirm Password//-->
                        <div class="form-group">
                            <label for="pwd">Passwort Bestätigung:</label>
                            <input type="password" class="form-control"
                                placeholder="Geben Sie das Passwort zur Bestätigung erneut ein" id="cpassword"
                                name="cpassword">
                            <p class="err-msg">
                                <?php if($cpassErr!=1){ echo $cpassErr; } ?>
                            </p>
                        </div>

                        <button type="submit" class="btn btn-primary allowed-submit" value="Register" id="submit-btn"
                            name="register">Jetzt registrieren</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/validate.js"></script>
</body>

</html>