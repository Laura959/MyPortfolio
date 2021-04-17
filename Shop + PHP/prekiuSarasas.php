<?php
include_once('connect.php');
$name = $_COOKIE['prisijungimo_vardas'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Parduotuve</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="bg">
<h1 style="text-align:center">Mūsų parduotuvė</h1>
<p style="text-align:center">Sveiki, <?php echo $name;?></p>

<?php

//  isspausdinamas pasirinktu prekiu sarasas
 
    $query2 = "SELECT * FROM cart_userid WHERE PRISIJUNGIMO_VARDAS = '$name'";
    $result2 = mysqli_query($db, $query2) or die( mysqli_error($db)); 
    $i = 1;
    echo "<table>";
    echo "<h3>Jūsų pasirinktos prekės:</h3>";
    echo "<tr><th>Nr.</th><th>Pavadinimas</th><th>Kaina (Eur)</th><th>Kiekis (vnt.)</th></tr>";
    while($row = mysqli_fetch_array($result2)){   //Creates a loop to loop through results
        echo "<tr><td>".$i."</td><td>".$row['PAVADINIMAS']."</td><td>".$row['KAINA']."</td><td>".$row['KIEKIS']."</td></tr>";
        $i++; 
}       
    echo "</table>";
    echo "<br>";
    echo "<a href='vidus.php'>Grįžti į pradinį puslapį<a>";
    $query3 = "DELETE FROM cart_userid WHERE PRISIJUNGIMO_VARDAS = '$name'";
    $result3 = mysqli_query($db, $query3) or die( mysqli_error($db));

?>
</div>
</body>
</html>