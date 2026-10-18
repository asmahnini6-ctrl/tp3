
<?php
// Partie 6.3 - Dates
echo "<hr><footer>Date: " . date('d/m/Y');
$fin = new DateTime('2026-12-31');
$today = new DateTime();
$diff = $today->diff($fin);
echo " | Fin semestre dans: " . $diff->days . " jours";
echo "</footer></body></html>";
?>