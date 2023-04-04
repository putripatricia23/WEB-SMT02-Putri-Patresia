<?php 
include_once("database.php");


$db->query("INSERT INTO vendor Values ('', '$_POST[nomor]', '$_POST[nama]', '$_POST[kota]', '$_POST[kontak]')");

header("location: list_vendor.php");
?>



