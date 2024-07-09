<?php

$db_username = "sadikturan";
$db_password = "1234";

// if($db_username == "sadikturan" and $db_password == "1234"){
//     echo "Giris basarili";
// }else{
//     echo "Kullanici adi veya sifre hatali";
// }


// if($db_username == "sadikturan"){
//     if($db_password == "1234"){
//         echo "Giris basarili";
//     } else {
//         echo "Sifre hatali";
//     }
// }   else {
//         echo "Kullanici adi hatali";
// }

if($db_username != "sadikturan"){
    echo "Kullanici adi hatali";
}else if($db_password != "1234"){
    echo "Sifre hatali";
}else{
    echo "Giris basarili";
}

?>