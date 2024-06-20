<?php
$servername = "emmanub2024.mysql.db";
$username = "emmanub2024";
$password = "Thienan0112";
$dbname = "emmanub2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
