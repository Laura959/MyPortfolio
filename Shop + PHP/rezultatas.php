<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rezultatas</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="bg">


<?php
include_once('connect.php');
session_start();
$_SESSION['answer5'] = $_POST['q5'];

$suma = 0;

for($i=1;$i<=5;$i++){
    $suma = $suma + $_SESSION['answer'.$i]; 
}

$vidurkis = ($suma / 5);
echo "<div style='text-align:center'>";
echo "<h1><strong>Jūsų atsakymų vidurkis: ".$vidurkis."</strong></h1>";
echo "<h2>Ačiū, kad užpildėte mūsų apklausą, geros dienos!</h2>";
echo "</div>";

$name = $_COOKIE['prisijungimo_vardas'];
$query = "SELECT ID FROM vartotojai WHERE VARDAS = '$name'";
$result = mysqli_query($db,$query);
$row = $result->fetch_assoc();
$ID = $row["ID"];

$insert = "INSERT INTO vertinimas (Vartotojo_ID, Vidurkis) VALUES ('$ID', '$vidurkis') ";
$rezultatas = mysqli_query($db, $insert);


?>

<br>
<br>
<form style="text-align:center" action="vidus.php" method="POST">
            <p style="text-align:center">Grįžti į pradinį puslapį:</p>
            <button class="button" type="submit" name="submit">Grįžti</button>
        </form>
</div>
</body>
</html>