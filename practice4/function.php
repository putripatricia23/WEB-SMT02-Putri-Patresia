<?php 

$name = "putri";

function kenalan($nama){
    echo "hallo , nama saya ".$nama;

}

kenalan($name);


$nilai1=100;
$nilai2=200;
$nilai3=300;
function total($nilai1,$nilai2,$nilai3){
    $totalnilai = $nilai1 + $nilai2 + $nilai3;
    echo "total nilai nya adalah :".$totalnilai;
    // bisa nyetak pake return
    // return $totalnilai;
}

// $jumlah = total($nilai1,$nilai2,$nilai3);
// echo $jumlah;
total($nilai1,$nilai2,$nilai3);
?>