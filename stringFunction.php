<?php 
    echo nl2br("welcome\r\nThis is my HTMLdocument",true);


    echo "<br>";
    similar_text("Hello World","Hello Peter",$percent);
echo $percent;
echo "<br>";
$sim = similar_text('bafoobar', 'barfoo', $perc);
echo "similarity: $sim ($perc %)\n";

echo "<br>";
$str = "Assistance";
$str1 = "Assistants";
echo soundex($str);
echo soundex($str1);
echo "<br>";
$input = "Allien";
echo str_pad($input,10,"-=",STR_PAD_BOTH);
echo "<br>";
echo str_repeat("hello,",10);
echo "<br>";
echo str_replace("world","peter","hello world");
echo "<br>";
$find  = array("Hello","World");
$replace = array("B");
$arr = array("Hello","World","!");
print_r(str_replace($find,$replace,$arr));


echo "<br>";
$mystring = 'abc';
$findme   = 'b';
$pos = strpos($mystring, $findme);
echo $pos;
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
echo "<br>";
echo substr("hello world",0,-10);
echo "<br>";
$text = 'this is is a test';
echo substr_count($text, "is");
echo "<br>";

echo substr_count("this is nice","is",3,3);

echo "<br>";
$a=1;#int 
$b='2';#string
$c=(int)$b;#variable b is assigned to int
$a=(bool)$a;#variable a is asigned to boolean value
echo var_dump($c);
echo "<br>";
echo var_dump($a);
echo "<br>";
$a=1;#int 
$b="2";#string
$c=$a+$b;#become int
echo "<br>";
echo "$c",$c;

echo "<br>";
var_dump($a+$b);
?>