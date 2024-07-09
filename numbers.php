<?php

$sayi1 = 10.2;
$sayi2 = 20;

echo "sonuc : ".($sayi1 + $sayi2)."<br>";
echo "sonuc : ".($sayi1 - $sayi2)."<br>";
echo "sonuc : ".($sayi1 * $sayi2)."<br>";
echo "sonuc : ".($sayi1 / $sayi2)."<br>";

echo is_int($sayi1) ?"bu bir integer sayidir" ."<br>":"bu bir integer sayi degildir" ."<br>";
echo is_int($sayi2) ?"bu bir integer sayidir" ."<br>":"bu bir integer sayi degildir" ."<br>";


echo var_dump(is_float($sayi1))."<br>";
echo var_dump(is_float($sayi2))."<br>";

echo ceil(4.3)."<br>"; //yukarıya yuvarlama
echo floor(4.7)."<br>"; //aşağıya yuvarlama
echo round(4.8)."<br>"; //en yakın sayıya yuvarlama
echo sqrt(25)."<br>"; //kök alma



?>