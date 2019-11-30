<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_config.php';

/*
for($i=0; $i<=5; $i++){
    echo "*";    
    
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "</br>";
}
*/

/*
$array = array(
1 => "a",
"1" => "b",
false => "c",

);
print_r($array);


Here all keys will be type casted to number 1. but the value the array will hold will be of the data type whose precedence is higher.precedence hirarchy in increment order is as follows:

String("1")  => Number(1) => Float(1.5) => bool(true).  so if we omit true element from array then result will be :

Array ( [1] => c ) 

and so like that.....
*/

/* ----------------- */

//Write a program to concatenate two strings character by character. e.g : JOHN + SMITH = JSOMHINTH
$str1 = "JOHN";
$str2 = "SMITH";

$arr1 = str_split($str1);
$arr2 = str_split($str2);

$max = max(array(strlen($str1), strlen($str2)));
print json_encode($arr1);
echo "<br>";
print json_encode($arr2);
echo "<br>";

$res = '';

for($i=0; $i< $max; $i++){
    if(array_key_exists($i, $arr1)){
        //echo "in 1st if <br>";
        $res .= $arr1[$i];
        //echo $res."<br>";
    }
    if(array_key_exists($i, $arr2)){
        //echo "in 2nd if <br>";
        $res .= $arr2[$i];
        //echo $res."<br>";
    }
}

echo $res."<br>";

/* ----------------- */

//Write a Program for finding the biggest number in an array without using any array functions.
$array = array(7,3,40,9,15,1);
print json_encode($array)."<br>";
//$max1 = 0; $max2 = 0;

$len = count($array);
$max1 = $array[0];

for($i=1; $i < $len; $i++){
    if($array[$i] > $max1){
        $max1 = $array[$i];        
    }
    echo "in loop = ".$max1."<br>"; 
}
echo "min value = ".$max1;

/* second solution
for($j = 0; $j < count($array); $j++){
    if($array[$j] > $max1){
        $max2 = $max1;
        $max1 = $array[$j];
        echo "max1 ".$max1."--".$max2."<br>";
    }
    else if($array[$j] > $max2){
        $max2 = $array[$j];
        echo "max2 ".$max2."<br>";
    }    
}

echo "Maximum value = ".$max1;
echo "<br />"; 
echo "Second maximum Value =".$max2;
*/

/* ----------------- */

// swap 2 nos

$a = 2; $b = 4; $temp;
echo "<br>before swapping a= ".$a." b= ".$b;
$temp = $a;
$a = $b;
$b = $temp;
echo "<br>after swapping a= ".$a." b= ".$b;

/* ----------------- */

//Write a Program for Bubble sorting in PHP

for($c = 0; $c < ($len-1); $c++){
    for($d = 0; $d < ($len -$c -1); $d++){
       if($array[$d] > $array[$d+1]){
            $swap = $array[$d];
            $array[$d] = $array[$d+1];
            $array[$d+1] = $swap;
        }
    }
}

echo "<br>sorted list :: ";
for($c = 0; $c < $len; $c++){
    echo $array[$c]." ";
}

/* ----------------- */
/* Write a program to print the below format :
1 5 9
2 6 10
3 7 11
4 8 12
*/

 echo "<br />"; echo "<br />";
for($i=1; $i<=4; $i++){
    $i1=$i+4;
    $i2=$i+8;
    echo $i." ".$i1." ".$i2;
    echo "<br />";
}

/* ----------------- */

$a = '1';
echo $b = &$a;
echo $c = "2$b";
echo "<br />";

var_dump(0123 == 123);
var_dump('0123' == 123); 
var_dump('0123' === 123);

/* ----------------- */
echo "<br />";

$x = 4;
$y = 3;
function fun($x = 3, $y = 4)
{
    $z = $x+$y/$y+$x;
    echo "$z"."<br>";
} 

fun($x, $y);

/* ----------------- */
echo "fun1";
$a = 10;
$b = 4;
$c = fun1(10,4);
function fun1($a,$b)
{
    $b = 3;
    return $a - $b + $b - $a; 
}
echo $a;
echo $b;
echo $c;

/* ----------------- */
echo "<br />";
$str = "php demo text";
$str = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $str);
echo $str;
?>

