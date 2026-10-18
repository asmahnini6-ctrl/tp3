<?php
// Asma Mahnin - Partie 3 : Tableaux - 18/10/2026
require __DIR__ . "/config.php";
require __DIR__ . "/includes/entete_inc.php";
if(file_exists(__DIR__ . "/includes/menu_inc.php")) require __DIR__ . "/includes/menu_inc.php";

function mention($note){
    if($note >= 16) return "Très bien";
    elseif($note >= 14) return "Bien";
    elseif($note >= 12) return "Assez bien";
    elseif($note >= SEUIL) return "Passable";
    else return "Ajourné";
}
function afficher($tab){
    foreach($tab as $k=>$v) echo "$k => $v<br>";
}

$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];
$modules = ["PHP", "JavaScript", "HTML/CSS"];
?>
<style>
body{font-family:Arial;padding:20px;background:#f5f7fa}
.box{background:white;padding:15px;margin:15px 0;border-radius:10px;box-shadow:0 2px 5px #ccc}
h2{color:#0d47a1;border-bottom:2px solid}
table{border-collapse:collapse;width:100%;background:white}
th,td{border:1px solid #ccc;padding:8px;text-align:left}
th{background:#0d47a1;color:white}
.rouge{color:red;font-weight:bold;background:#ffebee}
pre{background:#eee;padding:10px;border-radius:5px}
</style>

<h1>Exercice 3.1 : Création</h1>
<div class="box">
<h3>Tableau $modules indexé:</h3>
<p><b>avec foreach:</b> <?php foreach($modules as $m) echo "$m - "; ?></p>
<p><b>par indice:</b> <?= $modules[0] ?>, <?= $modules[1] ?>, <?= $modules[2] ?></p>
<pre>var_dump: <?php var_dump($notes); ?></pre>
</div>

<h1>Exercice 3.2 : Affichage HTML</h1>
<div class="box">
<table>
<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>
<?php foreach($notes as $nom => $note): 
    $class = $note < SEUIL ? "rouge" : "";
?>
<tr class="<?= $class ?>"><td><?= $nom ?></td><td><?= $note ?></td><td><?= mention($note) ?></td></tr>
<?php endforeach; ?>
</table>
</div>

<h1>Exercice 3.3 : Statistiques</h1>
<div class="box">
<?php
// 1. Sans fonctions
$somme=0; $max=$notes[array_key_first($notes)]; $min=$max;
foreach($notes as $n){ $somme+=$n; if($n>$max) $max=$n; if($n<$min) $min=$n; }
$moy = $somme / count($notes);
echo "Somme (boucle) = $somme<br>Moyenne (boucle) = ".round($moy,2)."<br>Max (boucle)=$max Min (boucle)=$min<hr>";
// 2. Avec fonctions
echo "Vérif: array_sum=".array_sum($notes)." count=".count($notes)." moyenne=".round(array_sum($notes)/count($notes),2)." max=".max($notes)." min=".min($notes)."<hr>";
// 3. Effectifs par mention
$effectifs = [];
foreach($notes as $n){ $men=mention($n); $effectifs[$men]=($effectifs[$men]??0)+1; }
echo "<b>Effectifs par mention:</b><br>"; afficher($effectifs);
?>
</div>

<h1>Exercice 3.4 : Tri</h1>
<div class="box">
<h3>1. Par noms croissants (ksort)</h3><?php $tmp=$notes; ksort($tmp); afficher($tmp); ?>
<h3>2. Par notes décroissantes (arsort)</h3><?php $tmp=$notes; arsort($tmp); afficher($tmp); ?>
<h3>3. Par noms décroissants (krsort)</h3><?php $tmp=$notes; krsort($tmp); afficher($tmp); ?>
<h3>4. Par notes croissantes (asort)</h3><?php $tmp=$notes; asort($tmp); afficher($tmp); ?>
<pre>
// Question: quelle fonction pour tableau indexé $modules ?
// Réponse: sort() pour trier par valeurs croissantes, rsort() décroissantes
// asort/ksort gardent les clés, sort réindexe (0,1,2) donc mieux pour indexé
</pre>
</div>

<h1>Exercice 3.5 : Opérateurs de tableaux</h1>
<div class="box">
<?php
$a = ["x"=>1,"y"=>2];
$b = ["y"=>2,"x"=>1];
echo "a = "; print_r($a); echo "<br>b = "; print_r($b); echo "<br><br>";
echo "\$a + \$b = "; print_r($a + $b); echo " (union: garde a si clé existe)<br>";
var_dump($a == $b); echo " == true car mêmes paires clé/valeur même si ordre différent<br>";
var_dump($a === $b); echo " === false car ordre différent et === vérifie ordre + types";
?>
<pre>
// $a + $b => ["x"=>1,"y"=>2]  (y de $b ignoré car x,y existent déjà)
// $a == $b => true (égalité souple: mêmes clés/valeurs)
// $a === $b => false (identité stricte: ordre doit être identique)
</pre>
</div>

<?php if(file_exists(__DIR__ . "/includes/pied_inc.php")) require __DIR__ . "/includes/pied_inc.php"; ?>