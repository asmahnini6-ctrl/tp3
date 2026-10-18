<?php
require "config.php";
if(isset($_POST['login'])){
  $_SESSION['user'] = $_POST['user'] ?? 'admin';
  header("Location: ex03_tableau.php");
  exit;
}
include "includes/entete_inc.php";
include "includes/menu_inc.php";
?>
<h2>Login</h2>
<form method="POST">
  <input type="text" name="user" placeholder="Username" required>
  <button type="submit" name="login">Login</button>
</form>
<?php include "includes/pied_inc.php"; ?>