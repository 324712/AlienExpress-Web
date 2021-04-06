<?php
    require("../src/database.php");

    session_destroy();
    $_SESSION = array();
    header('Location: /');
?>