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
                        Beheeromgeving
                    </span>
                </div>
                <div class="blox-card-body">
                    Momenteel bevind je je in de beheeromgeving van AlienExpress. In deze omgeving kan je een nieuwe opleiding aanmaken,
                    een opleiding aanpassen, een opleiding verwijderen en aanmeldingen voor een opleiding bekijken.
                </div>
            </div>

            <div class="blox-card">
                <div class="blox-card-head">
                    <span class="blox-card-title">
                        Recent aangemaakte opleidingen
                    </span>
                </div>
            </div>

            <div class="uk-child-width-1-3@m" uk-grid>
                <?php
                    $sql = "SELECT * FROM `courses` ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($con,$sql);
                ?>

                <?php
                    while ($record = mysqli_fetch_assoc($result)) {
                        echo "
                            <div>
                                <a class='courses-a' href='../courses.php?slug=" . $record['slug'] . "'>
                                    <div class='blox-card'>
                                        <div class='blox-card-head'>
                                            <span class='blox-card-title'>" . $record['title'] . "</span>  
                                            <span class='blox-card-subtitle'>
                                                <div class='badge'>" . $record['level'] . "</div>
                                                <div class='badge'>" . $record['type'] . "</div>
                                                <div class='badge'>" . $record['duration'] . "</div>
                                            </span>                                      
                                        </div>
                                    </div>
                                </a>
                            </div>
                    
                                ";
                    }
                ?>
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
                        <li class="uk-active"><a href="./index.php">Startpagina</a></li>
                        <li><a href="./courses.php">Opleidingen</a></li>
                        <li><a href="./registrations.php">Aanmeldingen</a></li>
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
