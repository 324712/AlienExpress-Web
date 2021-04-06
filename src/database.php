<?php



$con = @mysqli_connect("host", "username", "password", "database");

if (!$con) {
    echo "<strong>Connection error:</strong>" . mysqli_connect_error() . ".";
}


session_start();
error_reporting(E_ALL);

//if(isset($_SESSION['email'])) {
//    $query = "SELECT firstname, lastname FROM users WHERE email= '".$_SESSION['email']."'";
//    $result = mysqli_query($con, $query) or die(mysql_error($con));
//    if (!$result) die('Query failed: ' . mysqli_error($db));
//
//    while($row = mysqli_fetch_array($result)){
//        echo $row['firstname'];
//        echo $row['lastname'];
//    }
//}