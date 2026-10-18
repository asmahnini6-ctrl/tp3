<?php session_start(); if(!isset($_SESSION['login'])){ header("Location: login.php"); exit; }
echo "Bienvenue ".$_SESSION['login']; ?><a href="deconnexion.php">Logout</a>