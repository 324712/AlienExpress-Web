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
                        Alle gebruikers
                    </span>
                </div>
                <div class="blox-card-body">
                    <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($con,$sql);
                    ?>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-hover uk-table-middle uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-table-shrink uk-text-center">ID</th>
                                <th>Voornaam</th>
                                <th>Tussenvoegsel</th>
                                <th>Achternaam</th>
                                <th>E-mail</th>
                                <th>Wachtwoord</th>
                                <th class="uk-table-shrink uk-text-center"></th>
                                <th class="uk-table-shrink uk-text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($record = mysqli_fetch_assoc($result)) {
                                echo "
                        <tr>
                            <td class='uk-text-center'>" . $record['id'] . "</td>
                            <td>" . $record['firstname'] . "</td>
                            <td>" . $record['insertion'] . "</td>
                            <td>" . $record['lastname'] . "</td>
                            <td>" . $record['email'] . "</td>
                            <td>" . $record['password'] . "</td>
                            <td><a href='./edit_users.php?id=" . $record['id'] . "'><i class='far fa-edit fa-fw'></i></a></td>
                            <td><a href='./delete_users.php?id=" . $record['id'] . "'><i class='far fa-trash-alt' fa-fw></i></a></td>
                        </tr>
                    ";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
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
                        <li><a href="./courses.php">Opleidingen</a></li>
                        <li><a href="./registrations.php">Aanmeldingen</a></li>
                        <li class="uk-active"><a href="./users.php">Gebruikers</a></li>
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
