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
//function add_element($element,$array){
//for ($i=0;$i<=count($array);$i++) {
 //   $index = count($array);
  //  $array[$index +1] = $element;

//}
//    return $array;
//}



echo "<br>";
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

$foo ="1";
$foo *=2;
echo $foo;
echo "<br>";
$fo = 10;   // $foo is an integer
$bar = (boolean) $fo;   // $bar is a boolean


echo $fo."<br>";

echo (bool)$bar."<br>";


var_dump($bar);
echo "<br>";
echo "\$foo==$foo; type is " . gettype ($foo) . "<br />\n";
$foo = (int) $bar;
echo $foo;

echo  "<br>";
$aaoo = <<<END
abcd
END;
echo $aaoo;

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    echo "<br>";
    echo $value;
    $value = $value * 2;
    echo "<br>";
    echo $value;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
echo "<br>";


foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}
echo "<br>";
$a = array(1, 2, 3, 17);

$i = 0; /* for illustrative purposes only */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}
echo  "<br>";
echo "<hr>";
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}
echo  "<br>";
echo "<hr>";

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list(, $val) = each($arr)) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}
echo  "<br>";
echo "<hr>";
$i=0;
while (++$i){
switch($i){
    case 5:
        echo  "At 5<br/>\n";
        break 1;
        case 10;
        echo "At 10 ; quitting<br/>\n";
        break 2;
        default;
        break;

    }
}
echo  "<br>";
echo "<hr>";
$j=0;

 do{
     print $j;
     ++$j;
     echo "<br>";

 }while($j<=10);

echo  "<br>";
echo "<hr>";
$i=0;
while(++$i){
    print $i;
    echo "<br>";
    if($i==11){
        break;
    }
}

echo  "<br>";
echo "<hr>";

function writeMsg(){

    echo "Am afisat";

}
writeMsg();

echo  "<br>";
echo "<hr>";


function famillyName($fname){
    echo "$fname <br>";
}
famillyName("Puscas");
famillyName("Pop");
famillyName("Gordea");

echo  "<br>";
echo "<hr>";

$stack = array('first', 'second', 'third', 'fourth', 'fifth');

foreach($stack AS $v){
    if($v == 'second')continue;
    if($v == 'fourth')break;
    echo $v.'<br>';
}
/*

first
third

*/

$stack2 = array('one'=>'first', 'two'=>'second', 'three'=>'third', 'four'=>'fourth', 'five'=>'fifth');
foreach($stack2 AS $k=>$v){
    if($v == 'second')continue;
    if($k == 'three')continue;
    if($v == 'fifth')break;
    echo $k.' ::: '.$v.'<br>';
}
/*

one ::: first
four ::: fourth

*/
echo  "<br>";
echo "<hr>";

$c="Cristi";
if ($c=="Cristi")
    echo 9;
else
    echo "0";

echo  "<br>";
echo "<hr>";

Class A
{
    function foo(){
        if (isset($this)){
            echo "this is defined (";
            echo get_class($this);
            echo ")\n";
        }else {
            echo "\$this is not defined.\n";
        }
    }
}

Class B
{
    function bar(){
        A::foo();
    }
}
$a=new A();
$a->foo();
A::foo();

$b=new B();
$b->bar();

B::bar();

echo "<br>";
echo "<hr>";

$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("welcome.txt"));
fclose($myfile);

echo "<br>";
echo "<hr>";

$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>































?>



</body>

</html>