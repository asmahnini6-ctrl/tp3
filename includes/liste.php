<?php
if(!file_exists("data/notes.csv")){ echo "Pas de fichier"; exit; }
$f=fopen("data/notes.csv","r"); if(!$f){ echo "Erreur"; exit; }
$somme=0; $n=0;
echo "<table border=1>";
while(($data=fgetcsv($f,0,";"))!==false){
  $moy=($data[1]+$data[2])/2;
  echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$moy</td></tr>";
  $somme+=$moy; $n++;
}
echo "</table> Moyenne classe: ".($somme/$n);
fclose($f);
// 5.3 avec fgets : while(!feof($f)){ $ligne=fgets($f); $data=explode(';',$ligne); }
// fgetcsv gère guillemets et ; dans champs, explode non
?>