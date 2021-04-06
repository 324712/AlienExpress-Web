<?php
    require("../src/database.php");

    /*
     * Controle of er momenteel al iemand ingelogd is, zo ja, dan verwijzen we die gene terug naar de index.
     * Als je ingelogd bent mag je namelijk niet nog een account aanmaken.
     */

    if (isset($_SESSION['email'])) {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inloggen &mdash; AlienExpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../dist/css/uikit.min.css" />
    <link rel="stylesheet" href="../dist/css/alien_base.css" />

    <script src="../dist/js/uikit.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/branding/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/branding/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/branding/favicon/favicon-16x16.png">
    <link rel="manifest" href="../dist/img/branding/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

<?php



if (isset($_POST['login'])) {

    if(!empty($_POST['email'])) {
        if(!empty($_POST['password'])) {

            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $email);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);

            $query = "SELECT * FROM `users` WHERE email = '$email'
                  AND password = '" . md5($password) . "'";

            $result = mysqli_query($con, $query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
            } else {
                echo "E-mailadres of wachtwoord klopt niet.";
            }
            /*
             * Als je geen wachtwoord ingevuld hebt, krijg je hier een melding van.
             */
        } else {
            echo "Wachtwoord is leeg.";
        }
        /*
         * Als je geen e-mailadres ingevuld hebt, krijg je hier een melding van.
         */
    } else {
        echo "Er is geen e-mailadres ingevuld.";
    }
} else {
?>

<div id="registration">
    <div class="uk-container">
        <div class="uk-text-center">
            <img src="../dist/img/branding/alienexpress_logo.png">
        </div>
        <div class="uk-child-width-1-2@m uk-grid" uk-grid>
            <div class="uk-width-expand@m">
                <!-- CARD LEFT -->
                <div class="blox-card">
                    <div class="blox-card-head">
                            <span class="blox-card-title">
                                Inloggen
                            </span>
                        <span class="blox-card-subtitle">
                                Door onderstaand formulier te gebruiken, log je in met je eigen account bij
                            AlienExpress.
                            </span>
                    </div>
                    <div class="blox-card-body">
                        <form class="uk-grid-small" method="post" name="login">
                            <div class="uk-width-1-1@s">
                                <strong>E-mailadres<span>*</span></strong>
                                <input class="uk-input" type="email" placeholder="" name="email" required>
                            </div>
                            <div class="uk-width-1-1@s">
                                <strong>Wachtwoord<span>*</span></strong>
                                <input class="uk-input" type="password" placeholder="" name="password" required>
                            </div>

                    </div>
                    <div class="blox-card-button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-half btn-primary">Account aanmaken</button>
                            <button class="btn btn-half btn-secondary" type="submit" name="login">Inloggen</button>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- END CARD LEFT -->
            </div>

            <div class="uk-width-2-5@m">
                <!-- CARD RIGHT -->
                <div class="blox-card">
                    <div class="blox-card-head">
                            <span class="blox-card-title">
                                Informatie
                            </span>
                        <span class="blox-card-subtitle">
                                Extra informatie en vraag op diverse antwoorden.
                            </span>
                    </div>
                    <div class="blox-card-body">
                        <p>
                            Tijdens het inloggen bij AlienExpress, maak je gebruik van het door jouw ingevulde
                            e-mailadres tijdens het proces van een account aanmaken.
                        </p>
                    </div>
                </div>
                <!-- END CARD RIGHT -->
            </div>
        </div>
    </div>
</div>

    <?php
}
?>
</body>
</html>
