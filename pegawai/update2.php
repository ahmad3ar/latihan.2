<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi2,"update pegawai set nama='$nama', usia='$usia', jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke pegawai.php
header("location:pegawai.php");

?>