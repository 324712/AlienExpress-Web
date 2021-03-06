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
    <title>Beheeromgeving - AlienExpress</title>
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
                        Alle aanmeldingen
                    </span>
                </div>

            </div>

            <?php
            $sql = "SELECT * FROM `registration` ORDER BY status";
            $result = mysqli_query($con,$sql);

            while ($record = mysqli_fetch_assoc($result)) {
                echo "<div class='blox-card'>
                        <div class='blox-card-head'>
                            <span class='blox-card-title'>
                                " . $record['firstname'] . " " . $record['insertion'] . " " . $record['lastname'] . "
                            </span>
                            <span class='blox-card-titleRight'>
                            
                            <a class='btn btn-secondary' href='./see_apply.php?id=" . $record['id'] . "' role='button'>Bekijk</a>
<a class='btn btn-info' href='./update_apply.php?id=" . $record['id'] . "' role='button'>Status aanpassen</a>
                            </span>
                            
                            <span class='blox-card-subtitle'>
                            
                            ";

                if ($record["status"] == 1) {
                    echo "<div class='badge badge-warning'>In behandeling</div>";
                } elseif ($record["status"] == 2) {
                    echo "<div class='badge badge-primary'>Afgewezen</div>";
                } else {
                    echo "<div class='badge badge-success'>Aangenomen</div>";
                }

                echo "
</span>
                        </div>
                      </div>
                        ";
            }
            ?>
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
                        <li class="uk-active"><a href="./registrations.php">Aanmeldingen</a></li>
                        <li><a href="./users.php">Gebruikers</a></li>
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
