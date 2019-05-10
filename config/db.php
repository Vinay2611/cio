<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=="127.0.0.1" || $_SERVER['HTTP_HOST']=="192.168.1.1"  || $_SERVER['HTTP_HOST']=="[::1]") {
    //Localhhost
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cio";
}else{
    //Server
    $servername = "localhost";
    $username = "root";
    $password = "showbiz61";
    $database = "shobizie_2019";
}


// Create connection
$db = new mysqli( $servername, $username, $password, $database );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

include_once 'functions.php';

date_default_timezone_set('Asia/Kolkata');

?>