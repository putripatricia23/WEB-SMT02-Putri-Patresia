<?php

    require_once 'dbkonek.php';


    // jika navigasi delete telah di klik dan mengirimkan id data, maka akan di hapus
    if(isset($_GET['id'])){
        $id = $_GET['id'];


        // query sql untuk menghapus
        $sql = "DELETE FROM pelanggan WHERE id = :id";

        // panggil koneksi database untuk menyipkan query sql
        $stmt = $conn->prepare($sql);


        // hubungkan parameter id
        $stmt->bindParam(':id', $id);

        // eksekusi variabel stmt
        $stmt->execute();


        // arahkan sekaligus refresh halaman index untuk data ter update
        header('Location: index.php');
    }


?>

