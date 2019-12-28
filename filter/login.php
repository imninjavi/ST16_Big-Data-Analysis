<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['email'];
$password = $_POST['pass'];
 
$query = mysqli_query($conn, "SELECT * FROM admin WHERE userid='$username' AND pass='$password'");
if($query){
    include 'index2.php';
}
