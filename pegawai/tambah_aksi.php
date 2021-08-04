<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form 
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];

//menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$usia','$jenis_kelamin','$alamat','$agama')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>