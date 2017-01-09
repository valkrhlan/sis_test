<?php

require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';
include_once ('klase/baza_class.php');
include_once('klase/sesija_class.php');

$smarty= new Smarty();

$sesija = new Sesija;
$pom = $sesija->dajTiP();
if (isset($pom)) {
    $smarty->assign('sesija', $pom);
} else {
    $smarty->assign('sesija', '-1');
}
$smarty->display('predlosci/header.tpl');


?>
        