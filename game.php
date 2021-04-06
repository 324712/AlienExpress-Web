<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>AlienExpress dé game - AlienExpress</title>
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

<div id="hero-banner" class="courses">
    <div class="uk-container uk-text-center">
        <div class="hero-text courses">
            <h1>
                AlienExpress dé game
            </h1>
        </div>
    </div>
</div>



<div id="hero-action">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <div class="uk-width-expand">
                <div class="blox-card">
                    <div class="blox-card-head">
                        <span class="blox-card-title">
                            AlienExpress dé game
                        </span>
                        <span class="blox-card-titleRight">
                            Uitgewerkte versie van Bo
                        </span>
                    </div>
                    <div class="blox-card-body">
                        <iframe src="./game/index.html" style="width: 100%;height: 330px;" title="Iframe Example"></iframe>
                    </div>
                </div>

                <div class="blox-card">
                    <div class="blox-card-head">
                        <span class="blox-card-title">
                            AlienExpress dé game
                        </span>
                        <span class="blox-card-titleRight">
                            Uitgewerkte versie van Dani en Milan
                        </span>
                    </div>
                    <div class="blox-card-body">
                        Helaas is de game niet beschikbaar.
                    </div>
                </div>
            </div>

            <div class="uk-width-1-3">
                <div class="blox-card">
                    <div class="blox-card-head">
                        <span class="blox-card-title">
                            Highscore
                        </span>
                    </div>
                    <?php
                        $sql = "SELECT * FROM `game` ORDER BY highscore DESC";
                        $result = mysqli_query($con,$sql);
                    ?>
                    <?php
                    while ($record = mysqli_fetch_assoc($result)) {
                        echo "<div class='blox-card-body'>  <strong>" . $record['username'] . "</strong> <div class='badge score'>" . $record['highscore'] . "</div> </div>
                            ";
                    }
                    ?>

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
