<?php
session_start();
if (!$_SESSION['username']) {
    header("Location: index.php");
  }
   include "koneksi2.php"; 


$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$nim = $_POST['nim'];
$penyakit = $_POST['penyakit'];
$insert = mysqli_query($conn, "INSERT INTO Penyakit (nama, jenis_kelamin, NIM,penyakit) VALUES ('{$nama}','{$jeniskelamin}','{$nim}','{$penyakit}')");

if ($insert){
  include "insert.php";    
  echo "<script>alert('Data berhasil di Input.Terima Kasih')</script>";
  //echo "Input data berhasil";
  
}


