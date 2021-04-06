<?php
require("../src/database.php");

/*
 * Controle of je ingelogd bent, als je niet ingelogd bent word je terug verwezen
 * naar de login pagina om in te gaan loggen.
 */
if(!isset($_SESSION['email'])) {
    header('Location: ./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Opleidingen aanpassen - AlienExpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../dist/css/uikit.min.css" />
    <link rel="stylesheet" href="../dist/css/alien_base.css" />

    <script src="../dist/js/uikit.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css"
          integrity="sha384-VhBcF/php0Z/P5ZxlxaEx1GwqTQVIBu4G4giRWxTKOCjTxsPFETUDdVL5B6vYvOt" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/branding/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/branding/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/branding/favicon/favicon-16x16.png">
    <link rel="manifest" href="../dist/img/branding/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body id="registration">

<div class="uk-container">
    <div class="uk-text-center">
        <img src="../dist/img/branding/alienexpress_logo.png">
    </div>

    <div class="uk-child-width-1-2@m" uk-grid>
        <div class="uk-width-expand@m">
            <div class="blox-card">
                <div class="blox-card-head">
                        <span class="blox-card-title">
                            Gebruiker aanpassen
                        </span>
                </div>
                <div class="blox-card-body">
                    <?php
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM `users` WHERE `id` = $id";
                        $result = mysqli_query($con, $sql);
                        $record = mysqli_fetch_assoc($result);

                    ?>
                    <!-- FORM -->
                    <?php
                    if(isset($_POST['update'])) {

                        function sanitize($raw_data) {
                            global $con;
                            $data = mysqli_real_escape_string($con, $raw_data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }

                        
                        $firstname      = sanitize($_POST["firstname"]);
                        $insertion      = sanitize($_POST["insertion"]);
                        $lastname       = sanitize($_POST["lastname"]);
                        $email      = sanitize($_POST["email"]);

                        $sql = "UPDATE `users`
                        SET `firstname` = '$firstname',
                            `insertion` = '$insertion',
                            `lastname` = '$lastname',
                            `email` = '$email'
                        WHERE `id` = '$id'";

                        // Alert als het aangemaakt is.
                        if(mysqli_query($con, $sql)) {
                            echo "
                                        <div class='uk-alert-success' uk-alert>
                                            <p>Succesvol aangepast!</p>
                                        </div>
                                    ";
                            header("Refresh:1; url=./users.php");
                        }
                    }
                    ?>
                    <!-- END FORM -->

                    <!-- HTML FORM -->
                    <form class="uk-form-horizontal" method="post">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-text">Voornaam</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="firstname" value="<?php echo $record["firstname"]; ?>">
                            </div>
                        </div>
                        
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-text">Tussenvoegsel</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="insertion" value="<?php echo $record["insertion"]; ?>">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-text">Achternaam</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="lastname" value="<?php echo $record["lastname"]; ?>">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-text">E-mail</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="email" value="<?php echo $record["email"]; ?>">
                            </div>
                        </div>

                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <button type="submit" name="update" class="btn btn-primary btn-full">Gebruiker aanpassen</button>
                    </form>
                    <!-- END HTML FORM -->
                </div>
            </div>
        </div>
        <div class="uk-width-1-5@m">
            <div class="blox-card">
                <div class="blox-card-head">
                        <span class="blox-card-title">
                            Beheernavigatie
                        </span>
                </div>
                <div class="blox-card-body">
                    <ul class="uk-nav uk-nav-default">
                        <li><a href="./index.php">Startpagina</a></li>
                        <li><a href="./courses.php">Opleidingen</a></li>
                        <li><a href="./registrations.php">Aanmeldingen</a></li>
                        <li class="uk-active"><a href="./users.php">Gebruikers</a></li>
                    </ul>
                </div>
                <div class="blox-card-footer">
                    <a class="btn btn-secondary btn-full" href="../index.php" role="button">Terug naar de website</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
