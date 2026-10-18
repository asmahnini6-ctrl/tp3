<?php
require "config.php";

function mention($note){
    if($note >= 16) return "Très bien";
    elseif($note >= 14) return "Bien";
    elseif($note >= 12) return "Assez bien";
    elseif($note >= SEUIL) return "Passable";
    else return "Ajourné";
}

echo mention(15)."<br>";

$mois = date("m");
switch($mois){
    case "01": echo "Janvier"; break;
    case "02": echo "Février"; break;
    case "03": echo "Mars"; break;
    case "12": echo "Décembre"; break;
    default: echo "Autre mois";
}
// Sans break, il exécute tous les case suivants (fall-through)

$i=1; while($i<=5){ echo $i; $i++; }
do{ echo $i; $i++; } while($i<=5);
for($j=0; $j<3; $j++) echo $j;
?>