<?php
session_start();
include 'koneksi.php';

$uid = $_POST['email'];
$pwd = $_POST['pass'];
$hash= password_hash($pwd, PASSWORD_DEFAULT);
$insert = mysqli_query($conn, "INSERT INTO admin (userid, pass) VALUES ('{$uid}','{$hash}')");

if ($insert){
   echo "Pendaftaran Berhasil";    
}
