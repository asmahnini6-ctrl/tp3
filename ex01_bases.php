<?php
require "config.php";

// 1.1 Variables valides
// $x valide, $_x valide, $2x invalide commence par chiffre, $x-y invalide -, $Prix_HT valide, $prix ht invalide espace, $état à éviter accent
$x = 5;
$_x = 10;
$Prix_HT = 20;
$a = 1; $A = 2; // $a != $A sensible à la casse

// 1.2 Constantes
echo ETABLISSEMENT."<br>";
echo NOTE_MIN." ".NOTE_MAX." ".SEUIL."<br>";
var_dump(defined('SEUIL')); // true
var_dump(defined('INCONNUE')); // false
// Si constante non définie -> Warning et considère comme string
// const au compile-time dans classe, define() au run-time partout

// 1.3 Calcul
$prix_ht = 60; $tva = 20;
$prix_ttc = $prix_ht * (1 + $tva/100);
echo "Le prix TTC du produit est de $prix_ttc €.<br>";

// 1.4 Types et cast
$test = 42;
$test = (string)$test;
var_dump($test);
var_dump((bool)0); // false
var_dump((bool)0.0); // false
var_dump((bool)"0"); // false
var_dump((bool)""); // false
var_dump((bool)"abc"); // true
var_dump((bool)[]); // false
var_dump((bool)null); // false

var_dump((int)3.9); // 3
var_dump((int)"12abc"); // 12
var_dump((float)"1.5e3"); // 1500
var_dump((int)true); // 1

echo 255 . " " . 0xFF . " " . 0377 . " " . 0b11111111 . "<br>"; // tout = 255

// 1.5 Chaînes
$traitees = "égales à"; $ici = 2;
// 1. Ahmed a dit : "J'ai réussi"
echo 'Ahmed a dit : "J\'ai réussi"'."<br>";
// 2. Voulez-vous supprimer C:\*.*?
echo "Voulez-vous supprimer C:\\*.*? <br>";
// 3. \n tel quel
echo 'Ceci n\'affichera pas \n de nouvelle ligne'."<br>";
// 4. variables non interprétées
echo 'Les variables ne seront pas $traitees $ici'."<br>";
// 5. interprétées
echo "Les variables seront $traitees $ici <br>";

$chaine = "*Bonjour les développeurs*";
echo trim($chaine, "*")."<br>";
for($i=0; $i<strlen($chaine); $i++){
    echo $chaine[$i]."<br>";
}
?>