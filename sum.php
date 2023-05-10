<?php 
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

class Calculate{
    public $num1 = 0;
    public $num2 = 0;
    function sum($num1,$num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        return $num1+$num2;
    }
}
$sum = new Calculate;
 echo $sum->sum($num1,$num2);