<?php
#variables and it's scope
//local scope-with in function only
function test()
{
    $x=10;
    echo $x ."<br>";
}
test();
//global scope-every where by using a way
 $y=20;
function global_var()
{
    global $y;
    echo $y ."<br>";
}
global_var();

//static scope

function c_value()
{
    static $z=0 ;
    $z++;
    echo $z ."<br>";
}
c_value();
c_value();
c_value();

//strings

$r="ramya is good girl";
$s='ramya is good girl';
echo "hai, $r"."<br>";
echo 'hai, $s'."<br>";

//string functions
//1.strlen()
echo strlen("hai welcome to php")."<br>";

//2.str_word_count()
echo str_word_count("hello,php")."<br>";

//3.strrev()
echo strrev("ramya")."<br>";
echo strrev("madam")."<br>";

//4.strpos()
echo strpos("this is php","is")."<br>";

//5.str_replace()
echo str_replace("php","wt","this is php")."<br>";

//6.strtoupper()
echo strtoupper("hello ramya")."<br>";

//7.strtolower()
echo strtolower("HELLO PHP")."<br>";

?> 