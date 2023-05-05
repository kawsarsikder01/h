<?php
$str = "Md.Kawsar";
echo bin2hex($str);
echo "<br>";
echo chr(50)."<br>";
echo chr(045)."<br>";
echo chr(0x50)."<br>";
$str1 = chr(046);
echo ucfirst("you $str1 me forever")."<br>";
$str2 = "Hello World";
echo chunk_split($str2,6,"...")."<br>";
$str3 = "Hello World";
echo convert_uuencode($str3)."<br>";
$str4 = "+2&5L;&\@5V]R;&0` `";
echo convert_uudecode($str4)."<br>";
$str5 = "PHP is pretty fun!!";
$strArray = count_chars($str5,1);
foreach($strArray as $key => $value){
    echo "The charecter <b>'".chr($key)."'</b> was found $value time(s)<br>";
}
$str6 = crc32("Hello World");
printf ($str6);
?>