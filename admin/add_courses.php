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
    <title>Opleidingen aanmaken - AlienExpress</title>
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
                            Opleiding toevoegen
                        </span>
                    </div>
                    <div class="blox-card-body">
                        <!-- FORM -->
                        <?php
                            if(isset($_POST['create'])) {

                                function sanitize($raw_data) {
                                    global $con;
                                    $data = mysqli_real_escape_string($con, $raw_data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                                $slug       = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['title']));
                                $title      = sanitize($_POST["title"]);
                                $image      = sanitize($_POST["image"]);
                                $level      = $_POST["level"];
                                $type       = $_POST["type"];
                                $duration   = $_POST["duration"];
                                $text       = sanitize($_POST["text"]);
                                $text1      = sanitize($_POST["text1"]);
                                $text2      = sanitize($_POST["text2"]);
                                $text3      = sanitize($_POST["text3"]);
                                $text4      = sanitize($_POST["text4"]);
                                $text5      = sanitize($_POST["text5"]);
                                $author     = $_SESSION["email"];
                                $date       = date_create()->format('d-m-y H:i:s');

                                $sql        = "INSERT INTO `courses` (`slug`, `title`, `image`, `level`, `type`, `duration`, `text`, `text1`, `text2`, `text3`, `text4`, `text5`, `author`, `created`) VALUES ('$slug', '$title', '$image', '$level', '$type', '$duration', '$text', '$text1', '$text2', '$text3', '$text4', '$text5', '$author', '$date')";

                                if(mysqli_query($con, $sql)) {
                                    echo "
                                        <div class='uk-alert-success' uk-alert>
                                            <p>Aangemaakt kut.</p>
                                        </div>
                                    ";
                                }
                            }
                        ?>
                        <!-- END FORM -->

                        <!-- HTML FORM -->
                        <form class="uk-form-horizontal" method="post">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-text">Naam opleiding</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="title" required>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-text">Afbeelding</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-width-large" id="form-h-text" type="text" name="image">
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Niveau</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" name="level" required>
                                        <option name="level">Niveau 1</option>
                                        <option name="level">Niveau 2</option>
                                        <option name="level">Niveau 3</option>
                                        <option name="level">Niveau 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="uk-clearfix"></div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Soort</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" id="form-h-select" name="type" required>
                                        <option name="type">BOL</option>
                                        <option name="type">BBL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="uk-clearfix"></div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Duur</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" id="form-h-select" name="duration" required>
                                        <option name="duration">1 jaar</option>
                                        <option name="duration">2 jaar</option>
                                        <option name="duration">3 jaar</option>
                                        <option name="duration">4 jaar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="uk-clearfix"></div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Algemene tekst</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text"></textarea>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Wat ga je leren?</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text1"></textarea>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Inhoud en vakken</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text2"></textarea>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Stagelopen</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text3"></textarea>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Specalisaties</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text4"></textarea>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-textarea">Vooropleiding en toelating</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-width-large" id="form-h-textarea" rows="5" name="text5"></textarea>
                                </div>
                            </div>


                            <button type="submit" name="create" class="btn btn-primary btn-full">Opleiding aanmaken</button>
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
