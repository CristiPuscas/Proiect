<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 3:06 PM
 */
$servername = "localhost";
$username = "cristi";
$password = "cristocea8";
$dbname = "cristi";



$connection=new mysqli($serverName,$user,$password,$db);
if($connection->connect_error){
    die("Connection failed".$connection->connect_error);

}

$sql="SELECT * FROM `fructe` WHERE 1";
$result= $connection->query($sql);
echo "~~~~~~With mysqli ~~~~~~";
echo "<table border='solid, black, 1px'>";
echo "<tr>";
echo "<th>Nume</th>";
echo "<th>Producator</th>";
echo "<th>Pret</th>";
echo "<th>Marime</th>";
echo "</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["Nume"] . "</td>";
    echo "<td>" . $row["Producator"] . "</td>";
    echo "<td>" . $row["Pret"] . "</td>";
    echo "<td>" . $row["Cantitate"] . "</td>";
}
echo "</table>";
$connection->close();


?>

