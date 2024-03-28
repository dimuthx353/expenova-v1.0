<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "Expenova";

try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // Perform SQL queries here...

} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}
