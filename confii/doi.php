<!DOCTYPR html>
<html>

<body>
<h1>Primul meu program php</h1>

<?php
//$color = "blue";
//echo 'haha <br>';
//echo $color. "<br>";

//$x=5/*+15*/+5;
//echo $x.'<br>';

//$a=15;
//$b=5;

//function myTest() {
  //  global $a , $b;
    //$a=$a + $b;

//}
//myTest();
//echo $a.'<br>';

 //function myTest2(){
   //  $c = 11;
     //echo '<p>Variabila c din functie este: $c</p>';
 //}

 //myTest2();
//if ($show_separators == TRUE) {
//    echo "<hr>\n";
//}
//echo strpos("hello word! la la","word");
//define("cristi","Cristi e cel mai tare");
//echo cristi;
$x=4;
$y=6;
//echo $x/$y."<br>";
//echo $x%$y;
//if  $x==#y
echo ++$x."<br>";
print --$y."<br>";
$a="este un string? ";
$b=" Da este";
echo $a.$b."<br>";
echo $a.$x."<br>";
echo $a.=$a."<br>";
if ($x==$y){
    $este=true;
    echo $este;
}
if ($a===$b){
    $este=false;
    echo $este;
}else{
echo 'false';
}
?>

</body>

</html>