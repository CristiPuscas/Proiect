<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 5:11 PM
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

function afisare($conn) {
    $sql ="SELECT * FROM `fructe` WHERE 1";
    foreach ($conn->query($sql) as $row) {
        print $row[0] . "\t";
        print $row[1] . "\t";
        print $row[2] . "\t";
        print $row[3] . "<br>";
    }
}
function    pdo($servername,$name,$password,$dbname,$sql)
{
    try{
        if(!$con = new PDO("mysql:$servername=$servername;dbname=$dbname",$name,$password))
        {
            throw new Exception("Error!");
        }
        else
        {
            echo "Conectarea la db a reusit!" ."<br>" . "<hr>";
            if($sql == "afisare")
            {
                afisare($con);
            }
            else
            {
                throw new Exception("Error1");
            }

        }

    }catch (Exception $exception)
    {
        if($exception->getMessage() == "Error")
        {
            echo "Conectarea la db nu a reusit!";
        }
        elseif ($exception->getMessage() =="Error1")
        {
            echo "Eroare la interogare!";
        }
        else
        {
            echo "Eroare!";
        }
    }
}
?>