<?php

function open_connection()
{
    $servername = "sql205.epizy.com";
    $username = "epiz_28077250";
    $password = "w8npFU9eokaY";
    $database = "epiz_28077250_users";
    $mysqli = mysqli_connect($servername, $username, $password, $database);

    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";
    return $mysqli;
}

?>