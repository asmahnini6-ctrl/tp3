<?php
require "config.php";
include "includes/entete_inc.php";
include "includes/menu_inc.php";
$prenom = $_GET['prenom'] ?? $_POST['prenom'] ?? '...';
$nom = $_GET['nom'] ?? $_POST['nom'] ?? '...';
echo "<h2>Bonjour $prenom $nom</h2>";
echo "<p>Etablissement: ".ETABLISSEMENT."</p>";
include "includes/pied_inc.php";
?>