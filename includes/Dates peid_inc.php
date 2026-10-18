
<?php
echo date("d/m/Y");
$fin=new DateTime("2026-12-31"); $now=new DateTime(); echo $now->diff($fin)->days." jours restants";
var_dump(checkdate(2,29,2024)); // true
?>