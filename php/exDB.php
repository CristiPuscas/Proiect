<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/23/2018
 * Time: 12:37 PM
 */
$servername="localhost";
$username="cristi";
$password="cristocea8";
$dbname="cristi";
$prenume="cristi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO angajat (Nume, Prenume, Varsta,Salariu,ID) 
    VALUES (:Nume, :Prenume, :Varsta, :Salariu, :ID)");
    $stmt->bindParam(':Nume', $Nume);
    $stmt->bindParam(':Prenume', $Prenume);
    $stmt->bindParam(':Varsta', $Varsta);
    $stmt->bindParam(":Salariu",$Salariu);
    $stmt->bindParam(":ID",$ID);

    // insert a row
    $Nume = "Puscas";
    $Prenume= "Cipri";
    $Varsta = "21";
    $Salariu = "100";
    $ID="5";
    $stmt->execute();

    // insert another row
    $Nume = "Mary";
    $Prenume = "Monroe";
    $Varsta = "30";
    $Salariu="100";
    $ID=6;
    $stmt->execute();

    // insert another row
    $Nume = "Pop";
    $Prenume = "Andreea";
    $Varsta = "19";
    $Salariu="100";
    $ID="7";
    $stmt->execute();

    echo "New records created successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>