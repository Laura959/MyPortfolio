<?php
$db = mysqli_connect('localhost', 'root', '', 'parduotuve');
if(!$db){
    die('Nepavyko prisijungti prie duomenų bazės');
}
?>