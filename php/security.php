<?php
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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO angajat (Nume, Prenume, Varsta,Salariu,ID) VALUES (?, ?, ? ,? ,? )");
$stmt->bind_param("sssss", $nume, $prenume, $varsta, $salariu ,$ID);

// set parameters and execute
$nume = "John";
$prenume = "Doe";
$varsta = "24";
$salariu = "255";
$ID = "1";
$stmt->execute();

$nume = "Mary";
$prenume = "Moe";
$varsta = "25";
$salariu = "200";
$ID = "2";
$stmt->execute();

$nume = "Julie";
$prenume = "Dooley";
$varsta = "18";
$salariu = "155";
$ID = "3";
$stmt->execute();

echo "New records created successfully";



$stmt->close();
$conn->close();
?>