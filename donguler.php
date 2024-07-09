<?php

    // for , while , foreach
/*
    for($i = 0; $i < 100; $i++){
        echo $i . "<br>";
    }


    $isimler = ["Ali", "ahmet", "Ayşe","canan"];
    
    for($i = 0; $i <count($isimler); $i++){
        echo "$i.$isimler[$i]" . "<br>";
    }
*/

$urunler = [
    ["iphone 14", 40000],
    ["iphone 15", 50000],
    ["iphone 16", 60000],
   
];
/*
for($i = 0; $i < count($urunler); $i++){
    echo $urunler[$i][0]." ".$urunler[$i][1]."<br>"; 

}
*/
foreach($urunler as $urun){
    echo $urun[0]." ".$urun[1]."<br>";
}

?>