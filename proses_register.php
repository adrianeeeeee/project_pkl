<?php 

include "koneksi.php";

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
$query = mysqli_query($koneksi, $sql);
while($login = mysqli_fetch_assoc($query)){
    $id = $login['id'];
    $username = $login['username'];

}

if(mysqli_num_rows($query) > 0){
    $_SESSION['status'] = "login";
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $username;
    header("location:admin.php?Login=sukses");
} else {
    echo "<script>alert('Username dan Password tidak cocok!'); history.back();</script>";
}
