<?php
$host = 'localhost';
$dbname = 'dbkoperasi';
$username = 'root';
$password = '';


// menguji apakah database berhasil terhubung dengan perintah try, jika tidak maka akan ditangkap dengan catch
// untuk print eror
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
