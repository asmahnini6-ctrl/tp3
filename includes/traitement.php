<?php
require "config.php";
if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['note_info'])){
  $info=(float)$_POST['note_info']; $math=(float)$_POST['note_math'];
  if($info>=NOTE_MIN && $info<=NOTE_MAX && $math>=NOTE_MIN && $math<=NOTE_MAX){
    echo "OK: ".htmlspecialchars($_POST['nom']);
    // 5.1 ecriture CSV
    $f=fopen("data/notes.csv","a"); fputcsv($f, [$_POST['nom'],$info,$math], ";"); fclose($f);
  } else echo "Note invalide";
}
// POST mieux pour mdp car pas dans URL, $_REQUEST contient GET+POST+COOKIE
?>