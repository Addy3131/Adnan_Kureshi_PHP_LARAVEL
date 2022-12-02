<?php

echo "<h3>if() statement</h3>"."<br>";
//if() statement
$num = 100;

if ($num=100) {
  echo "equal"."<br>";
}

echo "<h3>if else statement</h3>"."<br>";
//if else statement

if ($num=100) {
    echo "equal"."<br>";
} else {
    echo "not equal"."<br>";
}


echo "<h3>if..elseif..else Statement</h3>"."<br>";
//if..elseif..else Statement
$a=10;
$b=20;
$c=5;
if ($a>$b && $a>$c) {
    echo "a is max"."<br>";
}
 elseif ($b>$c) {
    echo "b is max"."<br>";
}
else {
    echo "c is max"."<br>";
}
?>