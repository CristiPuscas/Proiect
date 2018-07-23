<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 12:46 PM
 */
$servername = "localhost";
$username ="root";
$password = "";

// Create connection
$conn = new mysqli($servername,$username,$password,"cristi");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM `fructe` WHERE 1";


if ($result=mysqli_query($conn,$sql)){
    while ($row=mysqli_fetch_row($result)){
        echo "nume: ".$row[0]. " producator: ".$row[1]. " Pret: ".$row[2] ." marime: ".$row[3]."<br>";
    }
}else{
    echo"0 result";
}

mysqli_close($conn);



?>