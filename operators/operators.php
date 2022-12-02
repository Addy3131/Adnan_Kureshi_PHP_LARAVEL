<?php

echo "<h3>assignment opeartors</h3>"."<br>";
//assignment opeartors
$a=10;
echo "assigning right value to the left variable".$a."<br>";//assigning right value to the left variable
$a+=20;
echo "adding 20 to variable a".$a."<br>";//adding 20 to variable a
$a-=20;
echo  "adding 20 to variable a".$a."<br>";//adding 20 to variable a
$a/=20;
echo "subtracting 20 from variable a" .$a."<br>";//subtracting 20 from variable a
$a*=20;
echo "multiplying 20 to variable a" .$a."<br>";//multiplying 20 to variable a
$a%=20;
echo "modulo of a with 20" .$a."<br>";//modulo of a with 20

echo "<h3>arithmetic opeartors</h3>"."<br>";
//arithmetic operators

$c=10;
$d=20;

echo "addition of c & d :".$c+$d."<br>";//addition
echo "subraction of d & d :".$c-$d."<br>";//subraction
echo "multiplication of c & d :".$c*$d."<br>";//multiplication
echo "division of c & d :".$c/$d."<br>";//division
echo "modulus of c & d :".$c%$d."<br>";//modulus

echo "<h3>logical opeartors</h3>"."<br>";
//logical operators
$e= 10;  
$f = 20;

if ($e == 10 && $f == 20)
{
    echo "both equal"."<br>" ;//and operator
}
 
if ($e == 10 || $f == 21)
{
    echo "either of one is true"."<br>";//or operator
}
 
if (!($e == 11 && $f == 20))
{
    echo "both are not equal"."<br>" ;// not operator
}

echo "<h3>comparision opeartors</h3>"."<br>";
//comparision operator
$g=10;
$h=20;
//Equal
if($g==$h)
{
    echo"both equal"."<br>";
}
else
{
    echo"not equal"."<br>";
}
//Identical
if($g===$h)
{
    echo"both equal"."<br>";
}
else
{
    echo"not equal"."<br>";
}
//Not equal
if($g!=$h)
{
    echo"both equal"."<br>";
}
else
{
    echo"not equal"."<br>";
}
//greater than
if($g>$h)
{
    echo"condition true"."<br>";
}
else
{
    echo"condition false"."<br>";
}
//smaller than
if($g<$h)
{
    echo"condition true"."<br>";
}
else
{
    echo"condition false"."<br>";
}
//Greater than or equal to
if($g>=$h)
{
    echo"condition true"."<br>";
}
else
{
    echo"condition false"."<br>";
}
//Smaller than or equal to
if($g<=$h)
{
    echo"condition true"."<br>";
}
else
{
    echo"condition false"."<br>";
}

echo "<h3>Increment/Decrement opeartors</h3>"."<br>";
//increment/decrement operator
$i=10;
echo $i++."<br>";
echo $i--."<br>";

echo "<h3>String opeartors</h3>"."<br>";
//String Operators

//using "=" Concatenation opeartor
$name = "Adnan";
$sname = " Kureshi";
echo $name . $sname."<br>";


//using ".=" Append Concatenation opeartor

$name .= $sname;
echo $name."<br>";
?>
