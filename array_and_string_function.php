<?php
$a = "hello";
echo "a is ". is_array($a);
echo "<br>";
$b = array("red","green","blue");
echo "b is ". is_array($b);
echo "<br>";
$c = 0;
echo "c is ". is_null($c);
echo "<br>";
$d = null;
echo " d is ". is_null($d);
echo "<br>";
$e = array("red","green");
array_push($e,"blue","yellow");
 echo var_dump($e);
 echo "<br>";
 array_pop($e);
 print_r($e);
 echo "<br>";
 array_shift($e);
 print_r($e);
 array_unshift($e,"red");
 echo "<br>";
 print_r($e);
 echo "<br>";
 $f = array("volvo"=>"XC90","BMW"=>"X5");
 if(array_key_exists("volvo",$f)){
    echo "key exist!";
 }
 echo "<br>";
 $my_array = array("Dox","Cat","Horse");
 list($ab,$bc,$ca)=$my_array;
 echo "I have several animals, a $ab, a $bc and a $ca.";
 echo "<br>";
 echo substr("Hello world",10)."<br>";
 echo substr("Hello world",-10)."<br>";
 echo substr("Hello world",6,10)."<br>";
?>