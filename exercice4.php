<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <title>exercice 4</title>
 <style>table, th, td {
 border-collapse: collapse;}
</style>
</head>
<body>
 <?php
 $nom="neji";
 $prenom="lamiss";
 echo "$nom $prenom";
 echo "<br>".$nom."<br>".$prenom ;
 echo("<table border='1'><tr><th>Nom</th><th>prenom</th></tr><tr><td>$nom</td><td>$prenom</td></tr></table>");
 $info=$nom.$prenom;
 echo $info;
 ?>
 <script>
 alert("<?php echo $info; ?>");
 </script>
</body>
</html>