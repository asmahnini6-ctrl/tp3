<?php
require "config.php";
$nom = $_POST['nom'] ?? '';
$n1 = floatval($_POST['note1'] ?? 0);
$n2 = floatval($_POST['note2'] ?? 0);
$moy = ($n1 + $n2)/2;
$ligne = "$nom;$n1;$n2;$moy\n";
file_put_contents(DATA_FILE, $ligne, FILE_APPEND);
header("Location: liste.php");
exit;
?>