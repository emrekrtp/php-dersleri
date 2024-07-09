<?php

// key - value ilişkisi vardır
// 41 -> kocaeli

// $plakalar = array("41","53","34");
// $sehirler = array("kocaeli","rize","istanbul");

$plaka_bilgileri = array(
    "41" => "kocaeli",
    "34"=> "istanbul",
    "53"=> "rize",
);

echo $plaka_bilgileri["41"]."<br>";
echo $plaka_bilgileri["34"]."<br>";
echo $plaka_bilgileri["53"]."<br>";

$telefon_rehberi = [
"ali"=> "0535 123 45 67",
"canan"=> "0512 123 45 67",
"ahmet"=> "0543 123 45 67",
];
echo "<br>";

echo $telefon_rehberi["ali"]."<br>";

echo "<br>";
$urun = [
    "urunAdi" => "Iphone 14",
    "fiyat" => 30000,
    "satistaMi" => true,
];

echo $urun["urunAdi"]." ".$urun["fiyat"]."<br>";

echo "<br>";

$urunler = [
    [
        "urunAdi" => "Iphone 14",
        "fiyat" => 30000,
        "satistaMi" => true,
    ],
    [
        "urunAdi" => "Iphone 15",
        "fiyat" => 40000,
        "satistaMi" => true,
    ],
    [
        "urunAdi" => "Iphone 16",
        "fiyat" => 50000,
        "satistaMi" => true,
    ],
    
];

echo $urunler[0]["urunAdi"]."<br>";
echo $urunler[1]["urunAdi"]."<br>";
echo $urunler[2]["urunAdi"]."<br>";
?>