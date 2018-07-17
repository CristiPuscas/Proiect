<!DOCTYPR html>

<html>

<body>
<h1>Primul meu program php</h1>

<?php
$color = "blue";
echo 'haha <br>';
echo $color. "<br>";

$x=5/*+15*/+5;
echo $x;

$a=15;
$b=5;

function myTest() {
    global $a , $b;
    $a=$a + $b;
}
myTest();
    echo $a.'<br>';
	
	function myTest2(){
     $c = 11;
     echo '<p>Variabila c din functie este: $c</p>';
 }

 myTest2();
 echo '<p>Variabila c din functie este: $c</p>';
 
 $e=5;
 $f=2;
 echo $e/$f."<br>";
 
 echo $e**$f."<br>";
 echo "comenzile de git functioneaa";
	
?>

</body>

</html>