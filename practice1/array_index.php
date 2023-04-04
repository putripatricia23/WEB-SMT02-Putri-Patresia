<?php 

//buat array//
$presiden = ["soekarno", "soharto", "bj habibie", "gusdur","megawati","sby"];

//mengakses data//
echo "presiden ke-2 indonesia ".$presiden[1];
echo "<br/>";

//cetak semua data//
foreach($presiden as $putri){
    echo $putri. " ";
}
echo "<br/>";

//menambahkan data //
$presiden[] = "prabowo";
echo "<br/>";

//cetak semua data//
foreach($presiden as $putri){
    echo $putri. " ";
}
echo "<br/>";

//menghapus data//

unset($presiden[4]);
echo "<br/>";

//cetak semua data//
foreach($presiden as $putri){
    echo $putri. " ";
}
echo "<br/>";


//mengubah data//
$presiden[3]= "abdurahman wahid";
echo "<br/>";

//cetak semua data//
foreach($presiden as $putri){
    echo $putri. " ";
}
echo "<br/>";


?>