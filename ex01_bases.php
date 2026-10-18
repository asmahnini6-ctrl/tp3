<?php
// Auteur: Asma Mahnin - Objectif: TP3 Exo1 Bases - Date: 18/10/2026
require __DIR__ . "/config.php";

// Commentaire ligne avec //
# Commentaire ligne avec #
/* Commentaire
   sur plusieurs lignes */
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exo1 Bases</title>
<style>body{font-family:Arial;padding:20px;background:#f5f7fa} .box{background:white;padding:15px;margin:15px 0;border-radius:10px;box-shadow:0 2px 5px #ccc} h2{color:#0d47a1} pre{background:#eee;padding:10px}</style>
</head><body>
<h1>Exo1 - Bases - <?= ETABLISSEMENT ?></h1>

<div class="box">
<h2>Ex 1.1 : Noms de variables</h2>
<?php
// $x valide: commence par lettre
$x = 1; // valide
// $_x valide: underscore autorisé
$_x = 2; // valide
// $2x invalide: ne doit pas commencer par chiffre
// $x-y invalide: tiret interdit, c'est un moins
// $Prix_HT valide
$Prix_HT = 100; // valide
// $prix ht invalide: espace interdit
// $état invalide/déconseillé: accent, encodage
$a = 5;
$A = 10;
echo "a=$a et A=$A : ce sont deux variables distinctes (sensible à la casse)<br>";
echo "Validés: \$x, \$_x, \$Prix_HT";
?>
</div>

<div class="box">
<h2>Ex 1.2 : Constantes</h2>
<?php
echo "ETABLISSEMENT = ".ETABLISSEMENT."<br>";
echo "NOTE_MIN = ".NOTE_MIN."<br>";
echo "NOTE_MAX = ".NOTE_MAX."<br>";
echo "SEUIL = ".SEUIL."<br>";
echo "defined('SEUIL') = "; var_dump(defined('SEUIL'));
echo "defined('INCONNUE') = "; var_dump(defined('INCONNUE'));
?>
<pre>
// Que se passe-t-il si constante non définie ? -> Warning + PHP suppose que c'est une chaîne "INCONNUE" (avant PHP8) ou Erreur.
// Différence const vs define() :
// const: compile-time, dans une classe ou hors fonction, sensible casse, pas dans if
// define(): runtime, peut être dans if, boucle, etc.
</pre>
</div>

<div class="box">
<h2>Ex 1.3 : Calcul</h2>
<?php
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva/100);
echo "Le prix TTC du produit est de $prix_ttc €."; // tout vient des variables
?>
</div>

<div class="box">
<h2>Ex 1.4 : Types et conversions</h2>
<?php
$test = 42;
$test = (string) $test;
echo "1. "; var_dump($test);
echo "2. bool:<br>";
foreach ([0, 0.0, "0", "", "abc", [], null] as $v) { echo " "; var_dump((bool)$v); }
echo "3. casts:<br>";
var_dump((int) 3.9); // 3
var_dump((int) "12abc"); // 12
var_dump((float) "1.5e3"); // 1500
var_dump((int) true); // 1
echo "4. 255 en 4 notations: ";
$dec=255; $hex=0xFF; $oct=0377; $bin=0b11111111;
var_dump($dec,$hex,$oct,$bin);
?>
</div>

<div class="box">
<h2>Ex 1.5 : Chaînes</h2>
<?php
$traitees = "égales à";
$ici = 2;
echo '1. Ahmed a dit : "J\'ai réussi"<br>';
echo "2. Voulez-vous supprimer C:\\*.*? <br>";
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo '4. Les variables ne seront pas $traitees $ici<br>';
echo "5. Les variables seront $traitees $ici<br>";
echo "<br>*".trim("*Bonjour les développeurs*","*")."*<br>";
$str="PHP";
for($i=0;$i<strlen($str);$i++){ echo $str[$i]."<br>"; }
?>
<?php
// Auteur: Asma Mahnin - Objectif: TP3 Exo1 Bases - Date: 18/10/2026
require __DIR__ . "/config.php";

// Commentaire ligne avec //
# Commentaire ligne avec #
/* Commentaire
   sur plusieurs lignes */
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exo1 Bases</title>
<style>body{font-family:Arial;padding:20px;background:#f5f7fa} .box{background:white;padding:15px;margin:15px 0;border-radius:10px;box-shadow:0 2px 5px #ccc} h2{color:#0d47a1} pre{background:#eee;padding:10px}</style>
</head><body>
<h1>Exo1 - Bases - <?= ETABLISSEMENT ?></h1>

<div class="box">
<h2>Ex 1.1 : Noms de variables</h2>
<?php
// $x valide: commence par lettre
$x = 1; // valide
// $_x valide: underscore autorisé
$_x = 2; // valide
// $2x invalide: ne doit pas commencer par chiffre
// $x-y invalide: tiret interdit, c'est un moins
// $Prix_HT valide
$Prix_HT = 100; // valide
// $prix ht invalide: espace interdit
// $état invalide/déconseillé: accent, encodage
$a = 5;
$A = 10;
echo "a=$a et A=$A : ce sont deux variables distinctes (sensible à la casse)<br>";
echo "Validés: \$x, \$_x, \$Prix_HT";
?>
</div>

<div class="box">
<h2>Ex 1.2 : Constantes</h2>
<?php
echo "ETABLISSEMENT = ".ETABLISSEMENT."<br>";
echo "NOTE_MIN = ".NOTE_MIN."<br>";
echo "NOTE_MAX = ".NOTE_MAX."<br>";
echo "SEUIL = ".SEUIL."<br>";
echo "defined('SEUIL') = "; var_dump(defined('SEUIL'));
echo "defined('INCONNUE') = "; var_dump(defined('INCONNUE'));
?>
<pre>
// Que se passe-t-il si constante non définie ? -> Warning + PHP suppose que c'est une chaîne "INCONNUE" (avant PHP8) ou Erreur.
// Différence const vs define() :
// const: compile-time, dans une classe ou hors fonction, sensible casse, pas dans if
// define(): runtime, peut être dans if, boucle, etc.
</pre>
</div>

<div class="box">
<h2>Ex 1.3 : Calcul</h2>
<?php
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva/100);
echo "Le prix TTC du produit est de $prix_ttc €."; // tout vient des variables
?>
</div>

<div class="box">
<h2>Ex 1.4 : Types et conversions</h2>
<?php
$test = 42;
$test = (string) $test;
echo "1. "; var_dump($test);
echo "2. bool:<br>";
foreach ([0, 0.0, "0", "", "abc", [], null] as $v) { echo " "; var_dump((bool)$v); }
echo "3. casts:<br>";
var_dump((int) 3.9); // 3
var_dump((int) "12abc"); // 12
var_dump((float) "1.5e3"); // 1500
var_dump((int) true); // 1
echo "4. 255 en 4 notations: ";
$dec=255; $hex=0xFF; $oct=0377; $bin=0b11111111;
var_dump($dec,$hex,$oct,$bin);
?>
</div>

<div class="box">
<h2>Ex 1.5 : Chaînes</h2>
<?php
$traitees = "égales à";
$ici = 2;
echo '1. Ahmed a dit : "J\'ai réussi"<br>';
echo "2. Voulez-vous supprimer C:\\*.*? <br>";
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo '4. Les variables ne seront pas $traitees $ici<br>';
echo "5. Les variables seront $traitees $ici<br>";
echo "<br>*".trim("*Bonjour les développeurs*","*")."*<br>";
$str="PHP";
for($i=0;$i<strlen($str);$i++){ echo $str[$i]."<br>"; }
?>
</div>
</body></html>