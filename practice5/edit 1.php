<?php

require_once 'dbkonek.php';



// jika navigasi edit telah di klik dan mengirimkan id yang akan di edit
if(isset($_GET['id'])) {
    $id = $_GET['id'];


    // untuk melihat data lama yang akan di update
    // query sql untuk mencari data sesuai dengan id nya
    $sql = "SELECT * FROM pelanggan WHERE id = :id";

    // panggil koneksi database dan siapkan query sql nya
    $stmt = $conn->prepare($sql);


    // hubungkan parameter id sesuai data yang ingin di update
    $stmt->bindParam(':id', $id);


    // eksekusi variabel stmt
    $stmt->execute();


    // ambil data dari database dan simpan dalam bentuk array di variabel row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}



// jika ada tombol submit yang telah di klik maka berati ada data lama yang telah di ubah
if(isset($_POST['submit'])) {

    // simpan perubahan data nya didalam variabel
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];



    // simpan perubahan data nya didalam database
    $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir, 
                tgl_lahir = :tgl_lahir email = :email, kartu_id = :kartu_id WHERE id = :id";

    // panggil koneksi database untuk menyiapkan query sql
    $stmt = $conn->prepare($sql);


    // hubungkan tiap parameter berdasarkan data yang telah di input user
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':kode', $kode);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':jk', $jk);
    $stmt->bindParam(':tmp_lahir', $tmp_lahir);
    $stmt->bindParam(':tgl_lahir', $tgl_lahir);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':kartu_id', $kartu_id);


    // eksekusi variabel stmt
    $stmt->execute();


    // arahkan sekaligus refresh halaman index untuk melihat data ter update
    header('Location: index.php');
}
?>



<!-- form yang menampilkan data lama yang ingin di update -->
<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label for="nama">Code:</label>
	<input type="text" id="kode" name="kode" value="<?php echo $row['kode']; ?>"><br><br>

    <label>Name</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>

    <label for="nama">Jk:</label>
	<input type="text" name="jk" value="<?php echo $row['jk']; ?>"><br><br>

    <label for="nama">Tmp Lahir:</label>
	<input type="text" name="tmp_lahir" value="<?php echo $row['tmp_lahir']; ?>"><br><br>

    <label for="nama">Tgl Lahir:</label>
	<input type="date" name="tgl_lahir" value="<?php echo $row['tgl lahir']; ?>"><br><br>

    <label>Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

    <label>Kartu Id</label>
    <input type="text" name="kartu_id" value="<?php echo $row['kartu_id']; ?>">

    <button type="submit" name="submit">Save</button>
</form>
