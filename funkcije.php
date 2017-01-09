<?php

include_once ('klase/baza_class.php');
include_once('klase/sesija_class.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'validacija_korime') {
        $korime = $_POST['korime'];
        $db = new baza;
        $db->spajanje();
        $sql = "SELECT korime FROM korisnik WHERE korime='$korime'";
        $rez = $db->izvrsiSelect($sql);
        if ($rez->num_rows != NULL) {
            $result = 0;
        } else {
            $result = 1;
        }
        $db->prekiniVezu();

        echo $result;
    }
}

function obrada_greske($naziv) {
    global $greske;
    global $tekst_greski;
    $tekst_greski.="$naziv <br>";
    $greske++;
}

function nije_uneseno($name, $naziv) {
    if (empty($name) || $name == -1) {
        obrada_greske($naziv);
        return true;
    } else
        return false;
}
function provjera_zauzetosti($upit){
    $db = new baza;
    $db->spajanje();
    $sql = $upit;
    $rez = $db->izvrsiSelect($sql);
    $db->prekiniVezu();
   
    return $rez->num_rows;   
}
function dodaj_u_bazu($upit){
    $db = new baza;
    $db->spajanje();
    $sql = $upit;
    $rez = $db->izvrsiOstalo($sql);
    $db->prekiniVezu();
   //return $rez; 
}

function vrati_podatke($upit){
    $db = new baza;
    $db->spajanje();
    $sql = $upit;
    $rez = $db->izvrsiSelect($sql);
    $db->prekiniVezu(); 
    return $rez;   
}

?>

