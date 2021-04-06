<?php
    require('../src/database.php');

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
    <title>Account aanmaken &mdash; AlienExpress</title>
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
if (isset($_POST['register'])) {

    /*
     * Controle of het ingevulde e-mailadres al bestaat in de database.
     */
    $email = stripslashes($_REQUEST['email']);
    $emailQuery = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email'") or die(mysqli_error());
    $emailRow = mysqli_num_rows($emailQuery);

    /*
     * Melding als het e-mailadres al bestaat wat je ingevuld hebt.
     */
    if ($emailRow >= 1) {
        echo "Email is al bezet.";
    } else {
        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);

        $insertion = stripslashes($_REQUEST['insertion']);
        $insertion = mysqli_real_escape_string($con, $insertion);

        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($con, $lastname);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $date = date("Y-m-d H:i:s");

        $query = "INSERT into `users` (firstname, insertion, lastname, email, password, date)
                     VALUES ('$firstname', '$insertion', '$lastname', '$email','" . md5($password) . "', '$date')";
        $result = mysqli_query($con, $query);

        /*
         * Melding als je registratie succesvol is.
         */
        if ($result) {
            echo "Account aangemaakt";
        }
        /*
         * Melding als je registratie niet gelukt is als je bijvoorbeeld iets vergeten bent.
         */
        else {
            echo "Registratie is niet gelukt";
        }
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
                                Account aanmaken
                            </span>
                            <span class="blox-card-subtitle">
                                Door onderstaand formulier te gebruiken, maak je een eigen account aan bij AlienExpress.
                            </span>
                        </div>
                        <div class="blox-card-body">
                            <form class="uk-grid-small uk-grid" method="post" >

                                <div class="uk-width-2-5@s">
                                    <strong>Voornaam<span>*</span></strong>
                                    <input class="uk-input" type="text" placeholder="" name="firstname" required>
                                </div>

                                <div class="uk-width-1-5@s">
                                    <strong>Tussenvoegsel</strong>
                                    <input class="uk-input" type="text" placeholder="" name="insertion">
                                </div>

                                <div class="uk-width-2-5@s" >
                                    <strong>Achternaam<span>*</span></strong>
                                    <input class="uk-input" type="text" placeholder="" name="lastname" required>
                                </div>

                                <div class="uk-width-1-2@s">
                                    <strong class="mt5">E-mailadres<span>*</span></strong>
                                    <input class="uk-input nt" type="email" placeholder="" name="email" required>
                                </div>

                                <div class="uk-width-1-2@s">
                                    <strong>Wachtwoord<span>*</span></strong>
                                    <input class="uk-input nt" type="password" placeholder="" name="password" required>
                                </div>


                        </div>
                        <div class="blox-card-button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-half btn-primary">Annuleren</button>
                                <button class="btn btn-half btn-secondary" type="submit" name="register">Account aanmaken</button>
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
                                Tijdens het aanmaken van een eigen account bij AlienExpress vragen we je om wat basis
                                informatie over jezelf. Dit om te weten met wie we te maken hebben, bijvoorbeeld als
                                je een ticket aanmaakt of als je je aanmeld bij een van onze opleidingen.
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
