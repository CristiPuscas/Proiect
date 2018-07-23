<!DOCTYPR html>
<html>

<body>
<h1>Primul meu program php</h1>

<?php
$newline = "<br>";
$hr = "<hr>";
$nr = 0;

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

function sum ($x,$y){
    $z=$x+$y;
    return $z;
}
echo  "5+10= ".sum(5,10)."<br>";
echo  "7+13= ".sum(7,13)."<br>";
echo  "2+4= ".sum(2,4)."<br>";

echo "<br>";
echo "<hr>";

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

echo "<br>";
echo "<hr>";
 $sir=array(1,2,3,2,1,3,2,7,7,7,4,5,6,7);
 asort($sir);
 for ($i=0;$i<count($sir);$i++){
     echo $sir[$i]."<br>";
 }

echo "<br>";
echo "<hr>";

$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

    echo $age["Peter"]."<br>";



    echo "<br>";
    echo "<hr>";

//function checkNum($number) {
    ////if($number>1) {
      //  throw new Exception("Value must be 1 or below");
 //   }
  //  return true;
//}


//checkNum(2);
//echo "<br>";
//checkNum(-1);

echo "<br>";
echo "<hr>";

/*
function checkNum($number) {
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//trigger exception in a "try" block
try {
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
*/

echo "<h1>"."Error and Exception"."</h1>";

class customException extends Exception{
    public function errorMessage(){
        $errorMsg ="Error on line ".$this->getLine()." in ".$this->getFile()." <b>".$this->getMessage()."</b> is not a valid E-Mail address";
        return $errorMsg;
    }
}

$email="Someone@exemple...com";
try {
    if (filter_var($email,FILTER_VALIDATE_EMAIL)=== FALSE){
        throw new customException($email);
    }
}
catch (customException $e){
    echo $e->errorMessage();
}

echo "<br>";
echo "<hr>";


class newException extends Exception{

    public function ErrorMsg() {
        $error="Error on line ".$this->getLine()." in ".$this->getFile()."<b>".$this->getMessage()."is not a valid address";
        return $error;
    }
}
$email="puscas.cristi1995@gmail.com";

try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
        throw new newException($email);
    }
    if (strpos($email,"cristi")!==FALSE) {
        throw new Exception("$email is an e-mail valid");
    }
}
catch (newException $e){
    echo $e->ErrorMsg();
}

catch (Exception $e){
    echo $e->getMessage();
}

echo "<br>";
echo "<hr>";

//function myException($exceptie){
 //   echo "<b>Exception:</b>".$exceptie->getMessage();
//}
//set_exception_handler("myException");

//throw  new  Exception("Uncaught Exception occurend");

echo "<br>";
echo "<hr>";

$car= array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Laand Rover",17,15)
);
echo $car[0][0].": In Stock: ".$car[0][1].",sold: ".$car[0][2].".<br>";
echo $car[1][0].": In Stock: ".$car[1][1].",sold: ".$car[1][2].".<br>";
echo $car[2][0].": In Stock: ".$car[2][1].",sold: ".$car[2][2].".<br>";
echo $car[3][0].": In Stock: ".$car[3][1].",sold: ".$car[3][2].".<br>";

echo "<br>";
echo "<hr>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$car[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<br>";
echo "<hr>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br>";
echo "<hr>";
echo date("M");
echo "<br>";
echo date("h".":");
echo date("i".":");
echo date("s".":");
echo date("a".":");
echo "<br>";
echo date("Y");
echo "<br>";
echo "<hr>";

/* if (!file_exists("welcome.txt")){
    die("File not found");

}else{
    $file=fopen("welcome.txt","r");
}*/
echo "<br>";
echo "<hr>";
function customError($errno,$errstr){
    echo"<b>Error:</b> [$errno] $errstr<br>";
    echo "webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,"someone@exemple.com","From: webmaster@example.com");
}
set_error_handler("customError",E_USER_WARNING);
$test=2;
if ($test>=1){
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}
echo "<br>";
echo "<hr>";

/*
function Perfect($number){
$cnt=1;
    for ($i=1;$i<=$number;$i++){
        if ($i*$i==$number) {
            throw new Exception("Numarul: ".$number." este patrat perfect");

            $cnt++;
        }else{
            $cnt++;
        }
        if ($cnt>$number/2){
            throw new Exception("Numarul:".$number." nu e patrat perfect");
        }

    }
}
Perfect(9);
*/

/*

function test1()
{
    function test2()
    {
        echo "Apelare!" .$GLOBALS['newline'] .$GLOBALS['hr'];
    }
}
Echo "Media aritmetica pentru apelarea : ma(1,'??!!??', 3,5,'gg', 7) este : ";
ma(1,'??!!??', 3,5,'gg', 7);
$x1 = 2;
$x2 = 3;
echo $newline .$hr;
echo "Text : test(x1=2,x2=3): ";
test($x1,$x2);
echo"x1 dupa apel : $x1 , x2 dupa apel : $x2";
echo $newline .$hr;

test1().test2(); // sau se poate apela test1() si dupa test2() si va merge , o sa dea eroare daca se apeleaza intai test2() inainte sa fie apelat test1();

*/
function number($number1 ,$number2)
{
    try{

        if(($number1 - $number2)%2 == 0)
            throw new  Exception("Suma este para");
        elseif ($number1%2==0)
        {
            throw new Exception("Type1");
        }
        elseif ($number2%2==1 )
        {
            throw new Exception("Type2");
        }

        else
            echo "Diferenta dintre $number1 si $number2 este: ".($number1 -$number2);

    }catch (Exception $exception)
    {
        if($exception->getMessage() == "Suma este para") {
            echo "suma para";
        }
        elseif ($exception->getMessage() =="Type1")
        {
            echo "Primul numar nu este par!";
        }
        elseif ($exception->getMessage() =="Type2")
        {
            echo "Al doilea numar nu este par!" ." la linia :" .$exception->getLine() ." s-a gasit eroarea!";
        }
        else
        {
            echo "Eroare necunoascuta!";
        }
    }
    finally{
        echo "(s-a efectuat verificarea din functia:".__FUNCTION__ .")" .$GLOBALS['newline'] .$GLOBALS['hr'];
    }
}
number(233,442);

$newline.$hr;

echo "<h1>"."Magic function"."</h1>";

class Magic
{
    Public $Nume,$Prenume,$age;


    public function __construct($Nume, $Prenume, $age)
    {
        $this->Nume = $Nume;
        $this->Prenume = $Prenume;
        $this->age = $age;

    }



        public function __toString()
        {
            // TODO: Implement __toString() method.
            $str = "merge "  . "NUME " . $this->Nume . " Prenume " . $this->Prenume . " ANI " . $this->age . " ca la carte";
            return $str;
        }

}


$c1=new Magic("Puscas","Cristi","22");
echo $c1;

echo $newline.$hr;

class Test{
    Private $data=array();
    public $declared=1;
    private $hidden=2;
    public  function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "Setting '$name' to '$value'\n";
        $this->data[$name]=$value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo "Getting '$name'\n";
        if (array_key_exists($name,$this->data)){
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
                "Undefined property via __get(): ".$name.
                " in " . $trace[0]['file'] .
                " on line " . $trace[0]["line"],
                E_USER_NOTICE);
        return null;
    }
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
    public function getHidden(){
        $this->hidden;
    }
}
echo "<pre>\n";
$obj=new Test();
$obj->a=1;
echo "$obj->a . \n\n";
var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";


echo $obj->declared . "\n\n";

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";
echo $newline.$hr;

class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();


class jucator
{
    public $varsta;
    public $echipa;
    public $nationalitate;

    public function __construct()
    {
        echo func_get_arg(0);
        switch (func_get_arg(0)) {
            case 0:
                $this->_c1(func_get_arg(0));
                break;
            case 1:
                $this->_c2(func_get_arg(0), func_get_arg(1));
                break;
            case 2:
                $this->_c3(func_get_arg(0), func_get_arg(1), func_get_arg(2));
                break;
                defalt:
                echo "Nu s-a putut realiza crearea obiectului!";
        }
    }

    public function _c1($varsta)
    {
        $this->varsta=$varsta;
    }
    public function _c2($varsta,$echipe){
        $this->varsta=$varsta;
        $this->echipa=$echipe;
    }
    public function _c3($varsta,$echipa,$nationalitate){
        $this->varsta=$varsta;
        $this->echipa=$echipa;
        $this->nationalitate=$nationalitate;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        $str=$GLOBALS["newline"].$this->varsta.$this->echipa.$this->nationalitate;
        return $str;
    }
}

echo "<br>";
echo "<hr>";
$juc=new jucator(18,"str","rou");
echo $newline;
$juc2=new jucator(15,"merge");

echo $newline.$hr;

class Aa {
    function  __construct()
    {
        $a=func_get_arg(0);
        $j=func_num_args();
        if (method_exists($this,$f='__construct'.$j)) {
            call_user_func_array(array($this,$f),array($a));
        }
    }
    function __construct1($a1){
     echo('__construct with 1 param called: '.$a1.PHP_EOL);
    }
    function __construct2($a1,$a2){
        echo('__construct with 2 param called: '.$a1.','.$a2.PHP_EOL);
    }
    function __construct3($a1,$a2,$a3){
        echo('__construct with 3 param called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
$o=new Aa("sheep");


echo $newline.$hr;

$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("welcome.txt"));
fclose($myfile);

echo $newline.$hr;

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

$nume="Fisier PHP";


function crearefis($name){
if (!file_exists($name)){
    mkdir($name);


}
print "S-a creat fisierul";

}

crearefis("Fisier_PHP");


function modifica($nr,$value1,$value2){
    if (($nr==$value1) or ($nr==$value2)){
        chdir("Fisier_PHP");
        rename("File$nr","NewFile$nr");
    }

}
/*
function cerinta($nr=1){

    chdir("Fisier_PHP");
    for ($i=0;$i<=$nr;$i++){
        $var=fopen("File$i.txt","w");
        fwrite($var,"Acesta este fisierul cu numarul ".$i." creat pentru a indeplinii cerintele");
        modifica($i,1,3);
    }

}
cerinta(3);
*/
echo  $newline.$hr;

class  ABC
{
    function _construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function _construct1($a1)
    {
        echo('__construct with 1 param called: '.$a1."<br>");
    }

    function _construct2($a1,$a2)
    {
        echo('__construct with 2 params called: '.$a1.','.$a2."<br>");
    }

    function _construct3($a1,$a2,$a3)
    {
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3."<br>");
    }
}
$o = new ABC('aaa');
$o = new ABC('aaa','bbb');
$o = new ABC('aaa','bbb','ccc');

echo $newline.$hr;

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo $newline.$hr;


$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}



?>



</body>

</html>