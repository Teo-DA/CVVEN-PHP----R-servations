<?php
$servername = "localhost";
$username = "root";
$password = "darchy";
$dbname = "CVEN";


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) 
{
    die("Erreur de connexion : " . $conn->connect_error);
} 
?>