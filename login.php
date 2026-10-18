<?php
session_start();
if(isset($_COOKIE['dernier_login'])) $last=$_COOKIE['dernier_login']; else $last="";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $_SESSION['login']=$_POST['login'];
  setcookie("dernier_login", $_POST['login'], time()+86400, "/");
  header("Location: profil.php"); exit;
}
?>
<form method="POST"><input name="login" value="<?= htmlspecialchars($last) ?>"><button>Login</button></form>