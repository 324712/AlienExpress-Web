<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Opleidingen - AlienExpress</title>
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
                Onze opleidingen
            </h1>
        </div>
    </div>
</div>

<div id="hero-action">
    <div class="uk-container">


        <div class="uk-child-width-1-3@m uk-grid " uk-grid="">
            <?php

            if(isset($_GET['slug'])) {
                $slug = $_GET['slug'];


                $courseItem = mysqli_query($con, "SELECT * FROM `courses` WHERE slug= '$slug'") or die(mysqli_error());

                $courseExists = mysqli_num_rows($courseItem);

                if($courseExists >= 1) {
                    $row = mysqli_fetch_assoc($courseItem);
                    $courseTitle        = $row["title"];
                    $courseLevel        = $row["level"];
                    $courseType         = $row["type"];
                    $courseDuration     = $row["duration"];
                    $courseText         = $row["text"];
                    $courseText1        = $row["text1"];
                    $courseText2        = $row["text2"];
                    $courseText3        = $row["text3"];
                    $courseText4        = $row["text4"];
                    $courseText5        = $row["text5"];
                    $courseImage        = $row["image"];

                    echo "
                            <div class='uk-width-1-3@m'>
                                <div class='blox-card'>
                                    <div class='blox-card-imageTop' style='background-image: url(" . $courseImage . ")' alt='aaa'></div>
                                    <div class='blox-card-head'>
                                        <span class='blox-card-title'>
                                            " . $courseTitle . "
                                        </span>
                                        <span class='blox-card-subtitle'>
                                            <div class='badge'>" . $courseLevel . "</div>
                                            <div class='badge'>" . $courseType . "</div>
                                            <div class='badge'>" . $courseDuration . "</div>
                                        </span>
                                    </div>
                                </div>
                                
                                <a class='btn btn-success btn-full' href='./apply.php'>Aanmelden</a>
                                <a class='btn btn-danger btn-full' href='./courses.php'>Terug naar het overzicht</a>
                                
                            </div>
                            
                            <div class='uk-width-expand@m'>
                                <div class='blox-card'>
                                    <div class='blox-card-body'>
                                        <p>
                                            " . $courseText . "
                                        </p>
                                    </div>
                                    
                                    <div class='blox-card-body'>
                                        <h6>
                                            Wat ga je leren?
                                        </h6>
                                        <p>
                                            " . $courseText1 . "
                                        </p>
                                    </div>
                                    
                                    <div class='blox-card-body'>
                                        <h6>
                                            Inhoud en vakken
                                        </h6>
                                        <p>
                                            " . $courseText2 . "
                                        </p>
                                    </div>
                                    
                                    <div class='blox-card-body'>
                                        <h6>
                                            Stagelopen
                                        </h6>
                                        <p>
                                            " . $courseText3 . "
                                        </p>
                                    </div>
                                    
                                    <div class='blox-card-body'>
                                        <h6>
                                            Specialisaties
                                        </h6>
                                        <p>
                                            " . $courseText4 . "
                                        </p>
                                    </div>
                                    
                                    <div class='blox-card-body'>
                                        <h6>
                                            Vooropleiding en toelating
                                        </h6>
                                        <p>
                                            " . $courseText5 . "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
                } else {
                    echo "
                        <div class='uk-width-1-1@m uk-text-center'>
                            <div class='blox-card'>
                                <div class='blox-card-body'>
                                    <i class='far fa-planet-moon fa-fw'></i>
                                    <h6>Daar gaat iets fout...</h6>
                                    <p>Er is geen opleiding gevonden met de slug: <strong>$slug</strong>...</p>
                                    <a class='btn btn-danger btn-sm' href='./courses.php'>Terug naar het opleidingen-overzicht</a>
                                    
                                </div>
                            </div>
                        </div>
                        ";
                }
            } else {
                $sql = "SELECT * FROM `courses` ORDER BY `level`";
                $result = mysqli_query($con, $sql);

                while ($record = mysqli_fetch_assoc($result)) {
                    echo "
                    <div>
                        <a class='courses-a' href='courses.php?slug=" . $record["slug"] . "'>
                            <div class='blox-card'>
                                <div class='blox-card-imageTop' style='background-image: url(" . $record["image"] . ")' alt='" . $record["title"] . "'></div>
                                <div class='blox-card-head'>
                                    <span class='blox-card-title'>" . $record["title"] . "</span>
                                    <span class='blox-card-subtitle'>
                                        <div class='badge'>" . $record["level"] . "</div>
                                        <div class='badge'>" . $record["type"] . "</div>
                                        <div class='badge'>" . $record["duration"] . "</div>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    ";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include("./src/footer.php");
?>



<!--    <div class="uk-container" style="margin-top: 150px;">-->
<!--        <h2>Tijdelijke snelkoppelingen</h2>-->
<!--        <ul>-->
<!---->
<!--            --><?php //if(isset($_SESSION['email'])) { ?>
<!--                <li><a href="./account.php">--><?php //echo $_SESSION['email']; ?><!--</a></li>-->
<!--                <li><a href="./logout.php">Uitloggen</a></li>-->
<!--            --><?php //} else { ?>
<!--                <li>-->
<!--                    <a href="./create_account.php">Account aanmaken</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="./login.php">Inloggen</a>-->
<!--                </li>-->
<!--            --><?php //} ?>
<!--            <li>-->
<!--                <a href="./css_examples.php">CSS Examples</a>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->

</body>
</html>
