<?php

// include './inc/validate-script.php';
include './inc/conn.php';
include './inc/kueche_form.php';

//إستدعاء عناصر القائمة gerichte
$sql = 'SELECT * FROM gerichte ORDER BY date DESC';
$result = mysqli_query($conn, $sql);
$gerichte = mysqli_fetch_all($result, MYSQLI_ASSOC);


// $welcome = 'SELECT * FROM users WHERE first_name="$first_name" AND email="$email";';
// $welcome = 'SELECT first_name AS first_name FROM users;';
$welcome = 'SELECT * FROM users ORDER BY first_name LIMIT 1;';
$welcome_res = mysqli_query($conn, $welcome);
$users = mysqli_fetch_all($welcome_res, MYSQLI_ASSOC);


mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/kuecheStyle.css">
    <title>Kantine BFW Gerichte</title>

    <style>
    body {
        background-image: url('images/kueche1.jpg');
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

            <?php foreach($users as $user):?>
            <h5 class="welcome"><?php echo 'Hallo' . ' ' . ($user['first_name']) ?></h5>
            <?php endforeach; ?>

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
    <section>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">

                    <!--====Data insert form====-->
                    <p></p>
                    <h4 class="text-center">Wie viele Gerichte sollen wir heute zubereiten?</h4>
                    <div class="kueche-form">

                        <form action="kueche.php" method="post">
                            <!--// Abteilung//-->
                            <div class="form_kueche">
                                <label for="abteilung">Abteilung:</label>
                                <input type="text" class="form-control" id="abteilung" placeholder="Welche Abteilung?"
                                    value="<?php echo $abteilung ?>" name="abteilung">
                                <div class="form-text error"><?php echo $errors['abteilungError']?></div>
                                <p class="err-msg">
                                </p>
                            </div>
                            <!--//Gerichte//-->
                            <div class="form_kueche">
                                <label for="gerichte">Gerichte:</label>
                                <input type="text" class="form-control" id="gerichte"
                                    placeholder="z.B. vegetarisches Gericht oder volles Gericht" value=""
                                    name="gerichte">
                                <div class="form-text error"><?php echo $errors['gerichteError']?></div>
                                <p class="err-msg">

                                </p>
                            </div>
                            <!--//Anzahl//-->
                            <div class="form_kueche">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" id="anzahl" placeholder="Wie viele Personen?"
                                    value="<?php echo $anzahl ?>" name="anzahl">
                                <div class="form-text error"><?php echo $errors['anzahlError']?></div>
                                <p class="err-msg">
                                </p>
                            </div>
                            <div class="hinzuButton">
                                <button type="submit" class="btn btn-primary" value="submit"
                                    name="submit">Hinzufügen</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div>
            <div class="col-sm-3 anzahl">
                <h4 class="tabelle_title">Die Abteilung:</h4>
            </div>
            <div class="col-sm-3 anzahl">
                <h4 class="tabelle_title">Das Gericht:</h4>
            </div>
            <div class="col-sm-3 anzahl">
                <h4 class="tabelle_title">Die Anzahl:</h4>
            </div>
            <div class="col-sm-3 anzahl">
                <h4 class="tabelle_title">Das Datum:</h4>
            </div>

        </div>

        <?php foreach($gerichte as $gericht) : ?>
        <div class="col-sm-3 anzahl">
            <div class="card my-1">
                <div class="card-body">
                    <h6><?php echo htmlspecialchars($gericht['abteilung']); ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3 anzahl">
            <div class="card my-1">
                <div class="card-body">
                    <h6><?php echo htmlspecialchars($gericht['gerichte']); ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3 anzahl">
            <div class="card my-1">
                <div class="card-body">
                    <h6><?php echo htmlspecialchars($gericht['anzahl']) . ' '.'Personen'; ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3 anzahl">
            <div class="card my-1">
                <div class="card-body">
                    <h6><?php echo htmlspecialchars($gericht['date']); ?>
                    </h6>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <section>
    <div class="b-example-divider" style="height: 3rem; margin: 20px 0px;"></div>
    </section>
    <section>
        <div class="row w-101 fixed-bottom">
            <footer class="py-2 bg-primary text-white text-center position-relative">
                <div class="container-fluid">
                    <p class="lead">
                        Copyright &copy; 2021 Khalid Arab
                    </p>
                </div>
            </footer>
        </div>
    </section>

    <script src="./js/bootstrap.bundle.min.js">
    < script src = "./js/kuecheScript.js" >
    </script>
</body>

</html>