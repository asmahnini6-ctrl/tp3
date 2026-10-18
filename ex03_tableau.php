<?php
require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";

$notes = ["Ahmed"=>15, "Fatima"=>8, "Karim"=>12, "Sara"=>16];
$modules = ["PHP", "JS", "SQL"];
foreach($modules as $m) echo $m."<br>";

// 3.2 Affichage HTML
echo "<table border=1><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach($notes as $nom=>$note){
    $color = $note < SEUIL ? "style='color:red'" : "";
    echo "<tr $color><td>$nom</td><td>$note</td><td>".mention($note)."</td></tr>";
}
echo "</table>";

// 3.3 Stats sans fonctions
$somme=0; $max=$notes[array_key_first($notes)]; $min=$max;
foreach($notes as $n){ $somme+=$n; if($n>$max) $max=$n; if($n<$min) $min=$n; }
$moy=$somme/count($notes);
echo "Moy=$moy Max=$max Min=$min<br>";
echo "Verif: ".array_sum($notes)." ".max($notes)." ".min($notes)."<br>";

// Effectifs par mention
$effectifs=[]; foreach($notes as $n){ $m=mention($n); $effectifs[$m]=($effectifs[$m]??0)+1; }
print_r($effectifs);

// 3.4 Tri
function afficher($tab){ print_r($tab); echo "<br>"; }
ksort($notes); afficher($notes);
arsort($notes); afficher($notes);
krsort($notes); afficher($notes);
asort($notes); afficher($notes);
// Pour indexé $modules on utilise sort(), rsort()

// 3.5 Opérateurs
$a=["x"=>1,"y"=>2]; $b=["y"=>2,"x"=>1];
var_dump($a+$b); // union garde $a
var_dump($a==$b); // true même ordre pas important
var_dump($a===$b); // false ordre différent

require "includes/pied_inc.php";
?>