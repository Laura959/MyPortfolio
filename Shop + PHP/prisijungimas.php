<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parduotuvė</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="prisijungimas">
            <h2 class="enter">PRISIJUNGIMAS</h2>
        <form class="enter" action="procesas.php" method="POST">
            <label class="label">Login</label>
            <input class="input" type="text" name="login" placeholder="Vartotojo vardas">
            <label class="label">Slaptazodis</label>
            <input class="input" type="password" name="password" placeholder="Slaptazodis">
            <button class="buttonP" type="submit" name="submit">Prisijungti</button>
        </form>
</div>
    </body>
</html>