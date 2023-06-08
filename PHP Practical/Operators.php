<?php

$a = 23;
$b= 34;
	
echo $a;
echo "<br>";
echo $b;

//Operators in PHP
echo "<br>";
//Arithmetic OP
echo "The value of a + b :";
echo $a+$b;

echo "<br>";
//Arithmetic OP
echo "The value of a - b :";
echo $a-$b;

echo "<br>";
//Arithmetic OP
echo "The value of a * b :";
echo $a*$b;

echo "<br>";
//Arithmetic OP
echo "The value of a / b :";
echo $a/$b;

echo "<br>";
//Arithmetic OP
echo "The value of a % b :";
echo $a%$b;
//Assignment OP

echo "<br>";
$newvar = $a;
$newvar+=2;

echo "The value of new variable is :";
echo $newvar;
echo "<br>";
echo $newvar;

$newvar-=2;

echo "The new value of new variable is :";
echo $newvar;
//Comarison OP
echo "<h1>Comparison OP</h1>";
echo "The value of 1 == 2 is ";
echo var_dump(1==2);

echo "The value of 1 != 2 is ";
echo var_dump(1!=2);

echo "The value of 1 <= 2 is ";
echo var_dump(1<=2);
//Increment\Decrement OP

$a++;
$b++;
++$a;
--$b;

echo ++$a;
echo "<br>";
echo --$a;
echo "<br>";
echo --$b;
echo "<br>";
echo $b++;
echo "<br>";
echo $b;
//Logical OP and(&&) or(||) not(|) xor

$my=(true and true);
//xor need 1 true or 1 false
$my1=(false xor true);
$my3=(false | false);
$my4=(false or true);

echo var_dump($my);
echo var_dump($my1);
echo var_dump($my3);
echo var_dump($my4);

?>