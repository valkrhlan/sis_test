<?php

include ('header.php');


$uri = $_SERVER["REQUEST_URI"];
echo $uri;
$pos = strrpos($uri, "/");
echo "<br>".$pos;



$dir = $_SERVER["SERVER_NAME"] . substr($uri, 0, $pos + 1);
 echo "<br>".$dir;
 
if (!isset($_SERVER["HTTPS"]) ||
    strtolower($_SERVER["HTTPS"]) != "on") {
    $adresa = 'https://' . $dir . 'index.php';
    header("Location: $adresa");
    exit();
}




$smarty->display('predlosci/prijava.tpl');
$smarty->display('predlosci/footer.tpl');
?>

