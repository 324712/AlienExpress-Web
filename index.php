<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>AlienExpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./dist/css/uikit.min.css" />
    <link rel="stylesheet" href="./dist/css/alien_base.css" />

    <script src="./dist/js/uikit.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css"
          integrity="sha384-VhBcF/php0Z/P5ZxlxaEx1GwqTQVIBu4G4giRWxTKOCjTxsPFETUDdVL5B6vYvOt" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="./dist/img/branding/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./dist/img/branding/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./dist/img/branding/favicon/favicon-16x16.png">
    <link rel="manifest" href="./dist/img/branding/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>



    <?php

        include("./src/navigation.php");
    ?>

    <div id="hero-banner">
        <div class="uk-container uk-text-center">
            <div class="hero-text">
                <h1>
                    De eerste school, vanuit de ruimte, gericht op jou!
                </h1>
            </div>
        </div>
    </div>

    <div id="hero-action">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m uk-text-center" uk-grid>
                <div>
                    <div class="blox-card">
                        <div class="blox-card-body">
                            <i class="far fa-user-astronaut fa-fw"></i>
                            <h6>Aanmelden</h6>
                            <p>De start van je opleiding.</p>
                            <a class="btn btn-secondary btn-sm" href="#" role="button">Meld je direct aan</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blox-card">
                        <div class="blox-card-body">
                            <i class="far fa-space-station-moon-alt fa-fw"></i>
                            <h6>Rondleidingen</h6>
                            <p>Maak kennis met de school.</p>
                            <a class="btn btn-secondary btn-sm" href="#" role="button">Geef je snel op, vol=vol!</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blox-card">
                        <div class="blox-card-body">
                            <i class="far fa-planet-moon fa-fw"></i>
                            <h6>Opleidingen</h6>
                            <p>Jouw toekomst.</p>
                            <a class="btn btn-secondary btn-sm" href="#" role="button">Bekijk al onze opleidingen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include("./src/footer.php");
    ?>

</body>
</html>
