<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<h2>Form Input Data</h2>
	<form method="post" action="index.php">
        <label for="nama">Code:</label>
		<input type="text" id="kode" name="kode"><br><br>

		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		
        <label>Jenis Kelamin</label> :
        <br>
        <label>Laki-Laki</label>
        <input type="radio" name="jk" value="L" checked>

        <br>
        <label>Perempuan</label>
        <input type="radio" name="jk" value="P">


        <!-- <label for="nama">Jk:</label> -->
		<!-- <input type="text" id="jk" name="jk"><br><br> -->
        <br>
        <label for="nama">Tmp Lahir:</label>
		<input type="text" id="tmp_lahir" name="tmp_lahir"><br><br>

        <label for="nama">Tgl Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		
		<label for="pesan">Id Kartu:</label>
		<input type="text" id="kartu_id" name="kartu_id"><br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>
