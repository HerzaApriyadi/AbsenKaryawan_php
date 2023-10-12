<?php

include('koneksi.php');

//get id
$nik = $_GET['id'];

$query = "DELETE FROM db_karyawan WHERE nik = '$nik'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>