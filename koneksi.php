<?php
    $host = "localhost";
    $username = "id21685187_root";
    $password = "Test_123";
    $dbname = "id21685187_pemweb";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
?>