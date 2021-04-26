<?php
include 'koneksi.php';
// menyimpan data ke variable
$id 		= $POST['id'];
$nama		= $POST['nama'];
$jenis_kelamin = $POST['jenis_kelamin'];
$email		= $POST['email'];
$alamat		= $POST['alamat'];
$kota		= $POST['kota'];
$pesan		= $POST['pesan'];

// query SQL untuk insert data
$query="INSERT INTO kontak SET id='$id', nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi,$query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>