<!-- //aray assosiatif -->

<?php 

//mirip dictionari di python//

$angka = [1,2,3,4,5];

$mhs = [
    "nama" => "Putri Patresia",
    "usia" => 19, 
    "domisili" => "Bogor"
];

echo "ini adalah hasil latihan array asosiatif ";
echo "<br/>";
echo "<br/>";

echo $mhs["nama"]."<br/>";
foreach ($mhs as $key => $value){
    echo $key . " : " . $value . "<br>";
}


?>

<!-- array function  -->
<?php 
echo "<br/>";
echo "ini adalah hasil latihan array function ";
echo "<br/>";
echo "<br/>";
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

<!-- array index -->
<?php 

echo "ini adalah hasil latihan array index ";
echo "<br/>";
echo "<br/>";
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