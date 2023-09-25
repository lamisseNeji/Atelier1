
 <?php
 $j=rand(1,7);
  switch($j)
  { case '1': echo "lundi";
    break;
    case '2': echo "mardi";
    break;
    case '3': echo "mercredi";
    break;
    case '4': echo "jeudi";
    break;
    case '5': echo "vendredi";
    break;
    case '6': echo "samedi";
    break;
    case '7': echo "dimanche";
    break;
    
  }
 
  $x=rand(0,4);
  switch($x)
    {
        case "0": case "1": case "2": echo "la valeur $x est inferieur a 3" ;
        break;
        case "3" : echo  " la valeur $x est egal a 3";
        break;
        case "4" : echo "la valeur $x est superieur a 3";
        break;
    }


 ?>
 

