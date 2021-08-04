<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h2>EDIT DATA PERPUSTAKAAN - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="pegawai.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEGAWAI</h3>

	<?php
	include 'koneksi2.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi2,"select * from pegawai where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update2.php">
			<table>
				<tr>			
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>usia</td>
					<td><input type="text" name="usia" value="<?php echo $d['usia']; ?>"></td>
				</tr>
				<tr>
					<td>jedis kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>agama</td>
					<td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>