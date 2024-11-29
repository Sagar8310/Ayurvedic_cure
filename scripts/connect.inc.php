<?php
$host = '172.22.0.10';
$user = 'root';
$password = 'Adpr1m3m3d1A';
$mysql_db = 'mp';
$conn_err = 'Could not connect';

// Create a connection using mysqli
$conn = new mysqli($host, $user, $password, $mysql_db);

// Check connection
if ($conn->connect_error) {
    die($conn_err . ": " . $conn->connect_error);
}

?>