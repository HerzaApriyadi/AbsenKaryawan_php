<?php

session_start();

include('koneksi.php');

$username     = $_POST['username'];
$password      = $_POST['password'];


$query  = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result     = mysqli_query($connection, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);


    $_SESSION['id_user']       = $row['id_user'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['username']       = $row['username'];


header("Location: index.php")





?>