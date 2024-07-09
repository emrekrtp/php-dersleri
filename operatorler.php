<?php

$a = 10;
$b = 5;

// 1-Aritmetik Operatorler

// echo $a + $b."<br>";
// echo $a - $b."<br>";
// echo $a * $b."<br>";
// echo $a / $b."<br>";
// echo $a % $b."<br>";
// echo $a ** $b."<br>";
// echo ++$a."<br>";

// 2- Atama Operatorleri

// $a = $a + $b;
// $a += $b;
// $a -= $b;
// $a *= $b;
// echo $a;

// 3- Karşılaştırma Operatorleri

// $sonuc = ($a == $b);
// $sonuc = ($a != $b);
// $sonuc = ($a >= $b);
// $sonuc = ($a <= $b);
// $sonuc = ($a > $b);
// echo var_dump($sonuc);

// 4- Mantıksal Operatorler

$yas = 20;
$mezuniyet = "Universite";

$sonuc = ($yas >=18 and ($mezuniyet == "ilkokul" or $mezuniyet == "Universite"));
echo var_dump($sonuc);
?>