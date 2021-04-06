<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact - AlienExpress</title>
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
                Neem contact op
            </h1>
        </div>
    </div>
</div>



<div id="hero-action">
    <div class="uk-container">
        <div class="uk-child-width-1-1@m" uk-grid>
            <div>
                <div class="blox-card">
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
                                <input class="uk-input" type="email" placeholder="" name="email" required>
                            </div>

                            <div class="uk-width-1-2@s">
                                <strong class="mt5">Telefoonnummer<span>*</span></strong>
                                <input class="uk-input" type="tel" placeholder="" name="phonenumber" required>
                            </div>

                            <div class="uk-width-1-1@s">
                                <label class="uk-form-label mt5 mb12" for="form-s-textarea"><strong><br/>Bericht<span>*</span></strong></label>
                                <textarea class="uk-textarea" id="form-s-textarea" rows="5" name="motivation" required></textarea>
                            </div>

                            <input type="hidden" value="In behandeling" name="status">

                            <div class="uk-width-1-1@s uk-text-center mt-10">
                                <button type="submit" name="apply" class="btn btn-primary">Versturen</button>
                            </div>
                    </div>
                    </form>
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
