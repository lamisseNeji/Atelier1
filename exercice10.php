<?php
$num = rand(1, 100); 
while ($num % 2 != 0) 
{
 $num = rand(1, 100);
}
echo "Le premier entier pair est : $num";
?>