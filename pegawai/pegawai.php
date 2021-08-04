<!DOCTYPE html>
<html>
<head>
	<title>datapegawai</title>
</head>
<body>
<h2>DATABASE pegawai</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>no</th>
		<th>nama</th>
		<th>usia</th>
		<th>jenis kelamin</th>
		<th>alamat</th>
		<th>agama</th>
	 </tr>
	<?php
	include 'koneksi2.php';
	$no = 1;
	$data = mysqli_query($koneksi2,"select * from pegawai");
	while ($d = mysqli_fetch_array($data)) {
		?>
	<tr>
		        <td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['usia']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['agama']; ?></td>
			<td>
		<a href="edit2.php?id=<?php echo $d['id'];?>">edit</a>
		<a href="hapus.php?id=<?php echo $d['id'];?>">hapus</a>
	</td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>
