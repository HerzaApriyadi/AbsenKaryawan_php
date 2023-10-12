<?php 

include('koneksi.php');

if (isset($_GET["nik"])) {

    $nik = $_GET["nik"];
    $keluar = date("H:i:s");
    $query = "UPDATE db_karyawan SET jam_keluar = '$keluar' WHERE nik = '$nik' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');

    
}

?>