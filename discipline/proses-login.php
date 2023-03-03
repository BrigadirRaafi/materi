<?php
$username   = $_POST['username'];
// $usernametes   = $_POST['usernametes'];
$getpass       = $_POST['ambilpass'];

include 'koneksi.php';

$user = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$getpass'");

$chek = mysqli_num_rows($user);
// var_dump($chek);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:dasboard.php"); 
}else{
    echo "Username atau password anda salah";
}
?>