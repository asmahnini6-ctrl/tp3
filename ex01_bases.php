
<?php
require 'config.php';
echo "Hello PHP<br><hr>";
$x = 10;
$_x = 20;
$Prix_HT = 50;
$a = "minuscule";
$A = "MAJUSCULE";
echo "a=$a et A=$A sont differentes<br><hr>"
echo ETABLISSEMENT."<br>";
echo NOTE_MIN." ".NOTE_MAX." ".SEUIL."<br><hr>";
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.<br>";
?>