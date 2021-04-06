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

<?php

$id = $_GET["id"];

$sql = "DELETE FROM `courses` WHERE `id` = $id";

mysqli_query($con, $sql);

header("Location: ./courses.php");

?>

</body>
</html>
