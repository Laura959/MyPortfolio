<?php

$db = mysqli_connect('localhost', 'root', '[ems]', 'parduotuve');
$login = "";
$password = "";

if(mysqli_connect_errno()){

    printf("Prisijungti nepavyko: %s\n", mysqli_connect_error());
    
    exit();

}else{
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
}

$sql_u = "SELECT * FROM vartotojai WHERE VARDAS = '$login' AND SLAPTAZODIS = '$password'";
$res_u = mysqli_query($db, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
    setcookie("prisijungimo_vardas", $login, time() + (60*60*4));
    header('Location: vidus.php');

} else {
    echo "Jūsų prisijungimo vardas arba slaptažodis netinkami. Prašome bandyti dar kartą";
        exit();
}
}
?>