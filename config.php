<?php
session_start();
define("ETABLISSEMENT", "FSSM");
define("NOTE_MAX", 20);
define("NOTE_MIN", 0);
define("SEUIL", 10);
define('DATA_FILE', __DIR__.'/data/notes.csv');
if(!is_dir(__DIR__.'/data')) mkdir(__DIR__.'/data', 0777, true);
?>
