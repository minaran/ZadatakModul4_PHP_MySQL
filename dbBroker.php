<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$db = "appmedik";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_errno){
    exit("Konekcija nije uspela: " . $conn->connect_errno);
}

?>