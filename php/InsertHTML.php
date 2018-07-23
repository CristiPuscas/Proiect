<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/23/2018
 * Time: 2:11 PM
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

$nume=$_GET['nume'];
$prenume=$_GET['prenume'];
$varsta=$_GET['varsta'];
$salariu=$_GET['salariu'];
$id=$_GET['id'];

$sql = "INSERT INTO angajat (Nume,Prenume, Varsta,Salariu, ID)
VALUES ('$nume','$prenume','$varsta','$salariu','$id')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

