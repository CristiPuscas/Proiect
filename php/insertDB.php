<?php
//$servername = "localhost";
//$username = "cristi";
//$password = "cristocea8";
//$dbname = "cristi";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "INSERT INTO angajat (Nume,Prenume, Varsta,Salariu, ID)
//VALUES ('Puscas','Cristi', '22','255', '1')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
$nume=$_GET['nume'];
echo $nume;


?>