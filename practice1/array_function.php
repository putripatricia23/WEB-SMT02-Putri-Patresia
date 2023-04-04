<?php 

$mahasiswa = ["putri", "nurul", "nisa", "yahya", "arya", "amar"];

//cetak semua dan sort//
sort($mahasiswa);
foreach ($mahasiswa as $m){
    echo $m. "<br/>";
}


echo "<br/>";

//cetak semua dan tidak sort//
arsort($mahasiswa);
foreach ($mahasiswa as $m){
    echo $m. "<br/>";
}

//push nambah dibelakang//
array_push($mahasiswa, "rafi");
echo "<br/>";
foreach ($mahasiswa as $m){
    echo $m. "<br/>";
}
echo "<br/>";


//unshift (nambahin didepan)//
array_unshift($mahasiswa, "mikhail");
echo "<br/>";
foreach ($mahasiswa as $m){
    echo $m. "<br/>";
}
echo "<br/>";



?>