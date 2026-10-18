<?php
require "config.php";
include "includes/entete_inc.php";
include "includes/menu_inc.php";
?>
<h2>Saisie des notes</h2>
<form method="POST" action="traitement.php">
  <input type="text" name="nom" placeholder="Nom" required>
  <input type="number" name="note1" placeholder="Note 1" step="0.1" required>
  <input type="number" name="note2" placeholder="Note 2" step="0.1" required>
  <button type="submit">Envoyer</button>
</form>
<?php include "includes/pied_inc.php"; ?>