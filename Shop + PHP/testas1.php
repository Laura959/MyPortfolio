<?php

    session_start();

    $question = "Kaip vertinate mūsų paslaugų kokybę?";
    $answerA = 5;
    $answerB = 4;
    $answerC = 3;
    $answerD = 2;
    $answerE = 1;

    $A = 5;
    $B = 4;
    $C = 3;
    $D = 2;
    $E = 1;

    $qID = 1;
    
    if (isset ($_COOKIE['prisijungimo_vardas'])) {
        $name = $_COOKIE['prisijungimo_vardas'];
    } else {
        $name = 'Svecias';
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1 klausimas</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="bg">
<FORM NAME ="form1" METHOD ="POST" ACTION ="testas2.php">
<h4> <?php echo $name;?>, džiaugiamės, kad sutinkate užpildyti trumpą apklausą apie mūsų paslaugų ir aptarnavimo kokybę.</h4>
<p>Vertinimas:</p>
<p>5 - labai gerai, 4 - gerai, 3 - nei gerai, nei blogai, 2 - blogai, 1 - labai blogai</p>
<P><?PHP print $question; ?>
<P><INPUT TYPE = 'Radio' Name ='q1' value= '5' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P><INPUT TYPE = 'Radio' Name ='q1' value= '4' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P><INPUT TYPE = 'Radio' Name ='q1' value= '3' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P><INPUT TYPE = 'Radio' Name ='q1' value= '2' <?PHP print $answerD; ?>><?PHP print $D; ?>
<P><INPUT TYPE = 'Radio' Name ='q1' value= '1' <?PHP print $answerE; ?>><?PHP print $E; ?>

<P><INPUT class="button" TYPE = "Submit" Name = "Submit1" VALUE = "Tęsti">
<INPUT TYPE = "Hidden" Name = "h1" VALUE = <?PHP print $qID; 
 ?>>
 </div>
  </body>
 </html>
