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
    <title>Aanmelding updaten - AlienExpress</title>
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
                            Status aanpassen
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


                        $status      = sanitize($_POST["status"]);

                        $sql = "UPDATE `registration`
                        SET `status` = '$status'
                        WHERE `id` = '$id'";

                        // Alert als het aangemaakt is.
                        if(mysqli_query($con, $sql)) {
                            echo "
                                        <div class='uk-alert-success' uk-alert>
                                            <p>Succesvol aangepast!</p>
                                        </div>
                                    ";
                            header("Refresh:1; url=./registrations.php");
                        }
                    }
                    ?>
                    <!-- END FORM -->

                    <!-- HTML FORM -->
                    <form class="uk-form-horizontal" method="post">

                        <div class="uk-margin">
                            <strong class="mt5 mb12">Status<span>*</span></strong>
                            <select class="uk-select" id="form-s-select" name="status" value="<?php echo $record["status"]; ?>"  required>
                                <option name="status">—</option>
                                <option name="status" value="3">Aannemen</option>
                                <option name="status" value="2">Afwijzen</option>
                            </select>
                        </div>

                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <button type="submit" name="update" class="btn btn-primary btn-full">Status aanpassen</button>
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
                        <li class="uk-active"><a href="./courses.php">Opleidingen</a></li>
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
