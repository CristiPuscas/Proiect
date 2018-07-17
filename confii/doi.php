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
//$x=4;
//$y=6;
//echo $x/$y."<br>";
//echo $x%$y;
//if  $x==#y
//echo ++$x."<br>";
//print --$y."<br>";
//$a="este un string? ";
//$b=" Da este";
//echo $a.$b."<br>";
//echo $a.$x."<br>";
//echo $a.=$a."<br>";
//if ($x==$y){
    //$este=true;
  //  echo $este."<br>";
//}
//if ($a===$b){
   // $este=false;
  //  echo $este."<br>";
//}else{
//echo 'false'."<br>";
//}
//$t=date("H");
//if ($t<20){
//    echo "am aflat .<br>";
//}
//$x=true;
//$y=false;
//$z=$y or $x;
//echo $z;

//var_dump(0 == 1); // false
//var_dump(0 == (bool)'all'); // false
//var_dump(0 == 'all'); // TRUE, take care
//var_dump(0 === 'all'); // false

// To avoid this behavior, you need to cast your parameter as string like that :
//var_dump((string)0 == 'all'); // false

function remove_element($element,$array){
    $index=array_search($element,$array);
    if($index!==false) {
        unset($array[$index]);
    }
    return $array;
}
$array  = ["A","B","C"];
echo count($array)."<br>";
$array =remove_element("X",$array);
echo count($array)."<br>";
for ($i=0;$i<count($array);$i++){
echo  $array[$i]." ";
}

echo "<br>";

$x=8-6.4;
$y=1.6;
var_dump(round($x)==round($y));

echo "<br>";

function float_max($mul = 2, $affine = 1) {
    $max = 1; $omax = 0;
    while((string)$max != 'INF') { $omax = $max; $max *= $mul; }

    for($i = 0; $i < $affine; $i++) {
        $pmax = 1; $max = $omax;
        while((string)$max != 'INF') {
            $omax = $max;
            $max += $pmax;
            $pmax *= $mul;
        }
    }
    return $omax;
}


?>

</body>

</html>