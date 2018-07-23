<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 4:15 PM
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

// sql to delete a record
$sql = "DELETE FROM fructe WHERE id=0";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
