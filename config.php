
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "appify_sampaledata_full2";

// Connection Create
$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>