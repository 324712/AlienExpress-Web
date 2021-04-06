<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aanmelden - AlienExpress</title>
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
                Aanmeldformulier
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
                        <!-- FORM -->
                        <?php
                        if(isset($_POST['apply'])) {

                            function sanitize($raw_data) {
                                global $con;
                                $data = mysqli_real_escape_string($con, $raw_data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            $firstname          = sanitize($_POST["firstname"]);
                            $insertion          = sanitize($_POST["insertion"]);
                            $lastname           = sanitize($_POST["lastname"]);
                            $email              = sanitize($_POST["email"]);
                            $phonenumber        = sanitize($_POST["phonenumber"]);
                            $bsn                = sanitize($_POST["bsn"]);
                            $gender             = sanitize($_POST["gender"]);
                            $birthday           = sanitize($_POST["birthday"]);
                            $street             = sanitize($_POST["street"]);
                            $housenumber        = sanitize($_POST["housenumber"]);
                            $housenumberadd     = sanitize($_POST["housenumberadd"]);
                            $zipcode            = sanitize($_POST["zipcode"]);
                            $city               = sanitize($_POST["city"]);
                            $precourse          = sanitize($_POST["precourse"]);
                            $nextcourse         = sanitize($_POST["nextcourse"]);
                            $motivation         = sanitize($_POST["motivation"]);
                            $status             = sanitize($_POST["status"]);

                            $sql                = "INSERT INTO `registration` (`status`, `firstname`, `insertion`, `lastname`, `email`, `phonenumber`, `bsn`, `gender`, `birthday`, `street`, `housenumber`, `housenumberadd`, `zipcode`, `city`, `precourse`, `nextcourse`, `motivation`) VALUES ('$status', '$firstname', '$insertion', '$lastname', '$email', '$phonenumber', '$bsn', '$gender', '$birthday', '$street', '$housenumber', '$housenumberadd', '$zipcode', '$city', '$precourse', '$nextcourse', '$motivation')";
                            if(mysqli_query($con, $sql)) {
                                echo "
                                        <div class='uk-alert-success' uk-alert>
                                            <p>Je aanmelding is succesvol ontvangen.</p>
                                        </div>
                                    ";
                            }
                        }
                        ?>
                        <!-- END FORM -->

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

                            <div class="uk-width-1-3@s">
                                <strong class="mt5">Burgerservicenummer<span>*</span></strong>
                                <input class="uk-input" type="text" placeholder="" name="bsn" required>
                            </div>

                            <div class="uk-width-1-3@s">
                                <strong class="mt5 mb12">Geslacht<span>*</span></strong>
                                <select class="uk-select" id="form-s-select" name="gender"  required>
                                    <option name="gender">—</option>
                                    <option name="gender">Man</option>
                                    <option name="gender">Vrouw</option>
                                    <option name="gender">Anders</option>
                                </select>
                            </div>

                            <div class="uk-width-1-3@s">
                                <strong class="mt5">Geboortedatum<span>*</span></strong>
                                <input class="uk-input" id="form-s-date" type="date" placeholder="1970-01-01" name="birthday" required>
                            </div>

                            <div class="uk-width-1-2@s">
                                <strong>Straat<span>*</span></strong>
                                <input class="uk-input" type="text" placeholder="" name="street" required>
                            </div>

                            <div class="uk-width-1-4@s">
                                <strong>Huisnummer<span>*</span></strong>
                                <input class="uk-input" type="text" placeholder="" name="housenumber" required>
                            </div>

                            <div class="uk-width-1-4@s" >
                                <strong>Toevoeging</strong>
                                <input class="uk-input" type="text" placeholder="" name="housenumberadd">
                            </div>

                            <div class="uk-width-1-2@s" >
                                <strong>Postcode<span>*</span></strong>
                                <input class="uk-input" type="text" placeholder="" name="zipcode" required>
                            </div>

                            <div class="uk-width-1-2@s" >
                                <strong class="mb12">Woonplaats<span>*</span></strong>
                                <select class="uk-select mt-10" id="form-s-select" name="city" required>
                                    <option name="city">—</option>
                                    <option name="city">Drenthe</option>
                                    <option name="city">Flevoland</option>
                                    <option name="city">Friesland</option>
                                    <option name="city">Gelderland</option>
                                    <option name="city">Groningen</option>
                                    <option name="city">Limburg</option>
                                    <option name="city">Noord-Brabant</option>
                                    <option name="city">Noord-Holland</option>
                                    <option name="city">Overijssel</option>
                                    <option name="city">Utrecht</option>
                                    <option name="city">Zeeland</option>
                                    <option name="city">Zuid-Holland</option>
                                </select>
                            </div>

                            <div class="uk-width-1-2@s">
                                <strong class="mt5 mb12">Vooropleiding<span>*</span></strong>
                                <select class="uk-select" id="form-s-select" name="precourse" required>
                                    <option name="precourse">—</option>
                                    <option name="precourse">Basisberoepsgerichte leerweg</option>
                                    <option name="precourse">Theoretische leerweg</option>
                                    <option name="precourse">Kaderberoepsgerichte leerweg</option>
                                    <option name="precourse">Gemengde leerweg</option>
                                    <option name="precourse">HAVO</option>
                                    <option name="precourse">VWO</option>
                                </select>
                            </div>

                            <div class="uk-width-1-2@s">
                                <strong class="mt5 mb12">Keuze nieuwe opleiding<span>*</span></strong>
                                <select class="uk-select" id="form-s-select" name="nextcourse" required>
                                    <option name="nextcourse">—</option>
                                    <option name="nextcourse">Alien ICT Medewerker</option>
                                    <option name="nextcourse">Alien Zorg en Welzijn</option>
                                    <option name="nextcourse">Alien Software Developer</option>
                                </select>
                            </div>

                            <div class="uk-clearfix"></div>

                            <div class="uk-width-1-1@s">
                                <label class="uk-form-label mt5 mb12" for="form-s-textarea"><strong><br/>Motivatie<span>*</span></strong></label>
                                <textarea class="uk-textarea" id="form-s-textarea" rows="5" name="motivation" required></textarea>
                            </div>

                            <input type="hidden" value="In behandeling" name="status">

                            <div class="uk-width-1-1@s uk-text-center mt-10">
                                <button type="submit" name="apply" class="btn btn-primary">Aanmelden</button>
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
