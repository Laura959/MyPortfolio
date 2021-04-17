
<?php

include_once('connect.php');
if (isset ($_COOKIE['prisijungimo_vardas'])) {
    $name = $_COOKIE['prisijungimo_vardas'];
} else {
    $name = 'Svecias';
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Parduotuve</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="bg">
<h1 style="text-align:center">Mūsų parduotuvė</h1>
<h4 style="text-align:center">Sveiki, <?php echo $name;?></h4>

<?php
$query = "SELECT * FROM prekes";
$result = mysqli_query($db, $query);

$i = 1;
echo "<table>"; 

?>
<div class="korteleContainer">
<?php
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

?>

<div class="kortele">

                    <form method="post" action="vidus.php">
                        <div>
                            <img src="images/<?php echo $i.".jpg";  ?>" /><br />

                            <h4><?php echo $row["PAVADINIMAS"]; ?></h4>

                            <h4> <?php echo "Kaina: ".$row["KAINA"]." Eur"; ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["PAVADINIMAS"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["KAINA"]; ?>" />
                            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" /><br>
                            <input class="buttonSm" type="submit" name="submits" value="Į krepšelį" />
                        </div>
                    </form>
                   
                </div>
                <?php
                $i++;
              
}
?>
</div>
<?php
echo "</table>"; 
// pasirinktos prekes ikeliamos i duomenu baze

if (isset($_POST['submits'])){
    $pname = $_POST['hidden_name'];
    $price = $_POST['hidden_price'];
    $quantity = $_POST['quantity'];
    $qrll = "INSERT INTO cart_userid (PRISIJUNGIMO_VARDAS, PAVADINIMAS, KAINA, KIEKIS) VALUES ('$name', '$pname', '$price', '$quantity') ";

    $resultatas = mysqli_query($db, $qrll);
    ?>
    <form style="text-align:center" action="prekiuSarasas.php" method="POST">
            <button class="button" type="submit" name="submited">Baigti apsipirkimą</button>
        </form>
    <?php
    } 

?>
<br><br>
<form style="text-align:center" action="testas1.php" method="POST">
            <h4 style="text-align:center">Kviečiame užpildyti trumpą apklausą apie mūsų paslaugų kokybę:</h4>
            <button class="buttonA" type="submit" name="submitA">Apklausa</button>
        </form>
</div>
</body>
</html>

