<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";
    $db = mysqli_connect(
        $hostname, $username, $password, $database
    );if (!$db) {
    echo "Database tidak konek";
    }
?>