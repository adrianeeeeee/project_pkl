<?php 
include 'koneksi.php';
 include "cek_login.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM website WHERE id = '$id'");


if ($query) {
    header("location:admin.php?hapus=sukses");
} else {
    header("location:admin.php?hapus=gagal");
} ?>