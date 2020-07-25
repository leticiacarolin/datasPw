<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<form action="formularioDat.php" method="GET">
 <input type="text" placeholder= "Primeira data:" name="d1" />
<p> <input type="text" placeholder= "Segunda data:" name="d2" /></p>
<p><input type="submit" value="Clique aqui"></p>
</form>

<?php 

$d1 = date_create($_GET["d1"]); 
$d2 = date_create($_GET["d2"]); 

$intervalo = $d1->diff($d2);
  echo $intervalo->format('%R%a dias de diferença');

