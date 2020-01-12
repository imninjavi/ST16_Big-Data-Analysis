<?php
session_start();
include 'koneksi.php';

$uid = $_POST['email'];
$pwd = $_POST['pass'];
$hash= md5($pwd);
$insert = mysqli_query($conn, "INSERT INTO dbadmin (userid, pass) VALUES ('{$uid}','{$hash}')");

if ($insert){
   echo "Pendaftaran Berhasil";    
}
