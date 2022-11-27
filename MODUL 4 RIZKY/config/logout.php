<?php 
unset($_COOKIE['email']);
unset($_COOKIE['nama']);
unset($_COOKIE['password']);
unset($_COOKIE['no_hp']);
unset($_COOKIE['colour']);

setcookie('email', '', time() - 3600, '/');
setcookie('nama', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');
setcookie('no_hp', '', time() - 3600, '/');
setcookie('colour', '', time() - 3600, '/');

header("Location:Rizky_Register.php");
?>