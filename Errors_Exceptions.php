<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<?php
include 'welcome.txt';
$newline = "<br>";
$hr = "<hr>";
$nr = 0;

//ERROR
//error_reporting(E_ALL ^ E_WARNING ); -->pentru a afisa toate erorile inafara de cele pentru warning
//error_reporting(E_ALL ^ E_NOTICE) --> pentru a afisa toate erorile - cele de tip notice
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); -->pentru a afisa toate erorile inafara de cele de tip notice si warning

//func2() -->Fatal error nu exista aceasta functie
//echo "afara" --> parse error(syntax error) --> lipseste ;
// echo $nr + $n10 -->notice error nu exista $n10
//include "welcome10.txt"; //-->warning error nu exista welmcome10.txt


/*
function fileerror($file)
{
    if(!file_exists($file)) {
        die("Fisierul nu exista!");
    }else{
        $file = fopen($file,"r");
        echo "Fisierul a fost deschis cu succes!";

    }
    echo $GLOBALS['newline'] .$GLOBALS['hr'];

}
*/

function errorHandeler($eerno, $erstr)
{
    echo "Error:[$eerno] $erstr";
}

set_error_handler("errorHandeler");


// Basic throw error
function basic($number)
{
    if($number < 0) {
        throw  new Exception("Numarul trebuie sa fie pozitiv!");
    }
    echo "E ok";
}

function basicthrow($nr)
{
    try{
        basic($nr);
    }catch (Exception $exception)
    {
        echo  $exception->getMessage();
    }
}
echo "Apelul basic pentru valoarea 10 => ";
echo basicthrow(10) .$newline .$hr;
echo "Apelul basic pentru valoarea -10 => ";
echo basicthrow(-10) .$newline .$hr;

//ERROR LOG!


error_log( "Erroare se afiseaza", 3,"welcome.txt" );

//fileerror("welcome.txt"); //succes
//fileerror("w.txt"); // error


//Parse error <=> Erori de sintaxa
//Fatal error => cand se foloseste o functie care nu exista
//warning => se deschide un fisier care nu exista
// notice => cand se foloseste o variabila care nu e initializata

function number($number1 ,$number2)
{
    try{

        if($number1 - $number2 <= 0)
            throw new  Exception("Negative");
        elseif (!(int)$number1)
        {
            throw new Exception("Type1");
        }
        elseif (!(int)$number2 )
        {
            throw new Exception("Type2");
        }

        else
            echo "Diferenta dintre $number1 si $number2 este: ".($number1 -$number2);

    }catch (Exception $exception)
    {
        if($exception->getMessage() == "Negative") {
            echo "Numar negativ";
        }
        elseif ($exception->getMessage() =="Type1")
        {
            echo "Tipul nu e int pentru primul numar!";
        }
        elseif ($exception->getMessage() =="Type2")
        {
            echo "Tipul nu e int pentru al doilea numar!" ." la linia :" .$exception->getLine() ." s-a gasit eroarea!";
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


function test2()
{
    try
    {
        basicthrow(-10);
    }
    catch (customException $exception)
    {
        echo $exception->errorM();
    }
}

test2();
echo $newline .$hr;
number(1200,"a2");
class customException extends Exception
{
    public function errorMessage()
    {
        $errorMessage = "S-a gasit o eroare la linia: " .$this->getLine()." in fisierul: " .$this->getFile() ." Numarul nu este par";
        return $errorMessage;
    }
}

class customException1 extends Exception
{
    public function error()
    {
        $errorMsg = "S-a gasit o eroare cu codul: " .$this->getCode() . " (^_^)";
        return $errorMsg;
    }
}
function test3($number)
{
    try
    {
      if($number % 2 == 0)
      {
          throw new customException($number);
      }
    }
    catch (customException $e)
    {
        echo $e->errorMessage();
    }
}
test3(2);
echo $newline .$hr;
function test4($number)
{
    try{
        if(!(int)$number)
            throw new customException1($number);
    }
    catch (customException1 $exception)
    {
        echo $exception->error();
    }
}
test4("abc");
?>