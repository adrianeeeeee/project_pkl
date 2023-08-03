<?php

session_start();
if($_SESSION['status'] != "login"){
  header("location:login.php?login=belum_login");
} else {
    
}
