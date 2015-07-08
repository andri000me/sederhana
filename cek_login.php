<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$status=mysql_query("select * status from member");
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
session_start();
$cookie_user = $_COOKIE['cookie_user'];

$login = mysql_query("select * from member where username='$username' and password='$password'");
if (mysql_num_rows($login) > 0){
$_SESSION['username'] = $username;

header('location:homep.php');


}else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}

//Peroleh variabel-variabel form 
$username = $_POST["username"];
$password = $_POST["password"];

//pasang cookie
setcookie("cookie_user", $username);
setcookie("cookie_pass", $password);
?>

