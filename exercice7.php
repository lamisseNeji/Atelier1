<?php
$a = 10;
$b = 20;
$resultat = $a <=> $b;
switch ($resultat) {
 case -1:
 echo "$a est inférieur à $b";
 break;
 case 0:
 echo "$a est égal à $b";
 break;
 case 1:
 echo "$a est supérieur à $b";
 break;
}
?>