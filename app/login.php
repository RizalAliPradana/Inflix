<?php


session_start();

include 'koneksi.php';

$username =$_POST['username'];
$password =md5($_POST['password']);

$data = mysqli_query($koneksi,"select*from t_user where username='$username'and password='$password'");

$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:admin/index.php?data=login");
}else{
    header("location:index.php?data=gagal");
}

?>

