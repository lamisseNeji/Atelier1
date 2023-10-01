<?php
function display_menu() {
 
 for ($i = 4; $i <= 10; $i++) {
 echo '<li><a href="exercice' . $i . '.php">Exercice ' . $i . '</a></li>';
 }
 
}
?>