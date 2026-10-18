<?php
// Asma Mahnin - FSSM - Partie 2 - 18/10/2026
require __DIR__ . "/config.php";

/* Exercice 2.1 */
function mention($note){
    if($note >= 16) return "Très bien";
    elseif($note >= 14) return "Bien";
    elseif($note >= 12) return "Assez bien";
    elseif($note >= SEUIL) return "Passable";
    else return "Ajourné";
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>exo2_flux</title>
<style>
body{font-family:Arial;padding:20px;background:#f5f7fa}
.box{background:white;padding:15px;margin:15px 0;border-radius:10px;box-shadow:0 2px 5px #ccc}
h2{color:#0d47a1;border-bottom:2px solid #0d47a1}
pre{background:#eee;padding:10px}
</style>
</head><body>
<h1>Partie 2 : Structures de contrôle et boucles</h1>

<div class="box">
<h2>Exercice 2.1 : if / elseif / else - mention()</h2>
<?php
$tests = [6, 9.5, 10, 11, 12, 13.5, 14, 15.9, 16, 19];
foreach($tests as $n){
    echo "$n => ".mention($n)."<br>";
}
?>
</div>

<div class="box">
<h2>Exercice 2.2 : switch</h2>
<?php
$mois_num = date("m");
echo "Mois courant (num): $mois_num<br> Nom: ";
switch($mois_num){
    case "01": echo "Janvier"; break;
    case "02": echo "Février"; break;
    case "03": echo "Mars"; break;
    case "04": echo "Avril"; break;
    case "05": echo "Mai"; break;
    case "06": echo "Juin"; break;
    case "07": echo "Juillet"; break;
    case "08": echo "Août"; break;
    case "09": echo "Septembre"; break;
    case "10": echo "Octobre"; break;
    case "11": echo "Novembre"; break;
    case "12": echo "Décembre"; break;
    default: echo "Mois inconnu"; break;
}
?>
<pre>
// Question 3: Si on oublie break dans un case,
// PHP fait un "fall-through" : il exécute aussi les cases suivants
// jusqu'à rencontrer un break ou la fin du switch.
</pre>
</div>

<div class="box">
<h2>Exercice 2.3 : Boucles</h2>

<h3>1. Triangle avec deux for imbriquées</h3>
<?php
for($i=1; $i<=6; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h3>2. while 0 à 20 pas de 2, 10 en gras</h3>
<?php
$i=0;
while($i<=20){
    if($i==10) echo "<b>$i</b> ";
    else echo "$i ";
    $i+=2;
}
?>

<h3>3. for + continue : pairs de 0 à 10</h3>
<?php
for($i=0;$i<=10;$i++){
    if($i%2!=0) continue;
    echo "$i ";
}
?>

<h3>4. while + switch + break 2</h3>
<?php
$i=1;
while(true){
    switch($i){
        case 5:
            echo "At 5 (sortie switch seulement)<br>";
            break;
        case 10:
            echo "At 10; quitting (sortie switch + boucle)<br>";
            break 2;
    }
    $i++;
}
?>

<h3>5. do-while (réécriture question 2)</h3>
<?php
$i=0;
do{
    if($i==10) echo "<b>$i</b> ";
    else echo "$i ";
    $i+=2;
} while($i<=20);
?>
<pre>
// Différence essentielle while vs do-while:
// while: teste la condition AVANT d'exécuter (peut ne jamais s'exécuter)
// do-while: exécute AU MOINS une fois, puis teste la condition
</pre>
</div>

<p><a href="index.php">← Retour</a></p>
</body></html>