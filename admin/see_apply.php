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
                            Aanmelding bekijken
                        </span>
                        <span class="blox-card-titleRight">
                            <a class="btn btn-secondary btn-sm" href="./registrations.php" role="button">Terug naar aanmeldingen</a>
                        </span>
                        <span class="blox-card-subtitle">
                            LET OP: Privacygevoelige gegevens.
                        </span>


                </div>
                <div class="blox-card-body">
                    <?php
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM `registration` WHERE `id` = $id";
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
                    }
                    ?>
                    <!-- END FORM -->

                    <form class="uk-grid-small uk-grid" method="post" >
                        <div class="uk-width-2-5@s">
                            <strong>Voornaam<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="firstname" value="<?php echo $record["firstname"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-5@s">
                            <strong>Tussenvoegsel</strong>
                            <input class="uk-input" type="text" placeholder="" name="insertion" value="<?php echo $record["insertion"]; ?>" disabled>
                        </div>

                        <div class="uk-width-2-5@s" >
                            <strong>Achternaam<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="lastname" value="<?php echo $record["lastname"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-2@s">
                            <strong class="mt5">E-mailadres<span>*</span></strong>
                            <input class="uk-input" type="email" placeholder="" name="email" value="<?php echo $record["email"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-2@s">
                            <strong class="mt5">Telefoonnummer<span>*</span></strong>
                            <input class="uk-input" type="tel" placeholder="" name="phonenumber" value="<?php echo $record["phonenumber"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-3@s">
                            <strong class="mt5">Burgerservicenummer<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="bsn" value="<?php echo $record["bsn"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-3@s">
                            <strong class="mt5 mb12">Geslacht<span>*</span></strong>
                            <select class="uk-select" id="form-s-select" name="gender" disabled>
                                <option name="gender"><?php echo $record["gender"]; ?></option>
                            </select>
                        </div>

                        <div class="uk-width-1-3@s">
                            <strong class="mt5">Geboortedatum<span>*</span></strong>
                            <input class="uk-input" id="form-s-date" type="date" value="<?php echo $record["birthday"]; ?>" name="birthday" disabled>
                        </div>

                        <div class="uk-width-1-2@s">
                            <strong>Straat<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="street" value="<?php echo $record["street"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-4@s">
                            <strong>Huisnummer<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="housenumber" value="<?php echo $record["housenumber"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-4@s" >
                            <strong>Toevoeging</strong>
                            <input class="uk-input" type="text" placeholder="" name="housenumberadd" value="<?php echo $record["housenumberadd"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-2@s" >
                            <strong>Postcode<span>*</span></strong>
                            <input class="uk-input" type="text" placeholder="" name="zipcode" value="<?php echo $record["zipcode"]; ?>" disabled>
                        </div>

                        <div class="uk-width-1-2@s" >
                            <strong class="mb12">Woonplaats<span>*</span></strong>
                            <select class="uk-select mt-10" id="form-s-select" name="city" value="<?php echo $record["city"]; ?>" disabled>
                                <option name="city"><?php echo $record["city"]; ?></option>
                            </select>
                        </div>

                        <div class="uk-width-1-2@s">
                            <strong class="mt5 mb12">Vooropleiding<span>*</span></strong>
                            <select class="uk-select" id="form-s-select" name="precourse" value="<?php echo $record["precourse"]; ?>" disabled>
                                <option name="precourse"><?php echo $record["precourse"]; ?></option>
                            </select>
                        </div>

                        <div class="uk-width-1-2@s">
                            <strong class="mt5 mb12">Keuze nieuwe opleiding<span>*</span></strong>
                            <select class="uk-select" id="form-s-select" name="nextcourse" value="<?php echo $record["nextcourse"]; ?>" disabled>
                                <option name="nextcourse"><?php echo $record["nextcourse"]; ?></option>
                            </select>
                        </div>

                        <div class="uk-clearfix"></div>

                        <div class="uk-width-1-1@s">
                            <label class="uk-form-label mt5 mb12" for="form-s-textarea"><strong><br/>Motivatie<span>*</span></strong></label>
                            <textarea class="uk-textarea" id="form-s-textarea" rows="5" name="motivation" disabled><?php echo $record["motivation"]; ?></textarea>
                        </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
