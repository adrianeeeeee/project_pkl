<?php 

include 'koneksi.php';
// if($_POST['tambah']){
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    echo '<script>alert("';
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        move_uploaded_file($file_tmp, 'file/' .$nama);
        $namaweb= $_POST['nama'];
        $gambar = $nama;
        $deskripsi = $_POST['deskripsi'];
        $link = $_POST['link'];
        $sql = "INSERT INTO website(nama,gambar,deskripsi,link) VALUES ('$namaweb', '$gambar', '$deskripsi', '$link')";
        $query = mysqli_query($koneksi, $sql);

        if($query){
            header("location:admin.php?tambah=sukses");
        } else {
            header("location:admin.php?tambah=gagal");
        }
    }

// }

?>