<!DOCTYPE html>
<html>
<head>
 <title>Nombre est pair ou impair</title>
</head>
<body>
 <form method="POST">
 <label for="number">Donner un nombre :</label>
 <input type="number" name="number" id="number" required>
 <input type="submit" value="Verifier">
 <?php
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 
 if ($number % 2 == 0) {
 echo "$number pair.";
 } else {
 echo "$number impair.";
 }
}
?>
</form>
</body>
</html>
