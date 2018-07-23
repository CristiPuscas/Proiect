<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 3:31 PM
 */

$servername = "localhost";
$username = "cristi";
$password = "cristocea8";
$dbname = "cristi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Fotbal (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Echipa VARCHAR(30) NOT NULL,
Tara VARCHAR(30) NOT NULL,
NR_Jucatori INT (50),
Loc INT 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Fotbal created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>