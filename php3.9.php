<?php
$arr = array('Yes','No');
 echo implode("|",$arr);
echo "<br>";



echo strpos("good morning","morning");
echo "<br>";

echo strpos("good morning","morning");
echo "<br>";

echo strpos("good morning","morning");
echo "<br>";

echo strpos("good morning","morning");
echo "<br>";

echo strpos("good morning","morning");
echo "<br>";

echo rtrim("Good morning","morning");
echo "<br>";

$str='one,two,three,four,five';
$arr=explode(',',$str);
print_r ($arr);
echo "<br>";


$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
echo "<br>";

$str='one,two,three,four';
//没有limit参数
$arr=explode(',',$str);
print_r($arr);
echo "<br/>";
//limit参数为0
$arr=explode(',',$str,0);
print_r($arr);
echo "<br/>";
//limit参数为正数
$arr=explode(',',$str,3);
print_r($arr);
echo "<br/>";
//limit参数为负数
$arr=explode(',',$str,-3);
print_r($arr);
echo "<br/>";

$arr = array('Hello','World!','I','love','you!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode("X",$arr);

