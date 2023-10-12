<?php 

include 'koneksi.php';

$nik = $_POST['id_karyawan'];
$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];

$masuk = date("H:i:s");
$keluar = NULL;
$tanggal = date("Y-m-d");


$query = "INSERT INTO db_karyawan VALUES ('$nik', '$nama', '$jabatan', '$masuk', '$keluar', '$tanggal')";

$result = mysqli_query($connection, $query);

header('Location: index.php');

?>