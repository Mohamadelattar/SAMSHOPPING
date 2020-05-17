<?php
    ob_start(); // Turn on output buffering
    session_start();

    $timezone = date_default_timezone_set("Africa/Casablanca");
    $con = mysqli_connect("localhost","root","","webproject");
    if(mysqli_connect_errno())
    {
        echo "Failed to connect". mysqli_connect_errno();
    }

?>