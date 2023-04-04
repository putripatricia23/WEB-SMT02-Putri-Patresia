<?php
    require_once 'dbkonek.php';

    // mengambil semua data yang ada di tabel kontak 
    $sql = " SELECT * FROM pelanggan";


    // panggil koneksi database untuk menyiapkan query sql
    $stmt = $conn->prepare($sql);


    // eksekusi variabel stmt
    $stmt->execute();




    // jika tombol submit di klik, maka ada penambahan data baru yang diinput user
    if(isset($_POST['submit'])){


        // ambil data dari form
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $email = $_POST['email'];
        $kartu_id = $_POST['kartu_id'];
    

    // simpan ke database
    $sql = "INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$kode, $nama, $jk, $tmp_lahir, $tgl_lahir, $email, $kartu_id]);

    
    // arahkan sekaligus refresh halaman index untuk melihat data ter update
    header("Location: index.php");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Tambah pelanggan</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <!-- <th>Id</th> -->
                <th>Kode</th>
                <th>Nama</th>
                <th>jenis_kelamin</th>
                <th>Tmp Lahir</th>
                <th>Tgl Lahir</th>
                <th>Email</th>
                <th>Kartu Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        <?php 
        $number = 1;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

            <tr>
                <td>  <?= $number?>  </td>
                <!-- <td>  <?= $row['id'] ?>  </td> -->
                <td>  <?= $row['kode'] ?>  </td>
                <td>  <?= $row['nama'] ?>  </td>
                <td>  <?= $row['jk'] ?>  </td>
                <td>  <?= $row['tmp_lahir'] ?>  </td>
                <td>  <?= $row['tgl_lahir'] ?>  </td>
                <td>  <?= $row['email'] ?>  </td>
                <td>  <?= $row['kartu_id'] ?>  </td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                    <a 
                        href="delete.php?id=<?= $row['id'] ?>"
                        onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                    >HAPUS</a>
                </td>
            </tr>

        <?php
            $number++;
            endwhile;
        ?>
        </tbody>
    </table>
</body>
</html>

