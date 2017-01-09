<?php

include ('header.php');
include ('funkcije.php');

$uri = $_SERVER['REQUEST_URI'];
$aktivacijski_kod = explode('?d=', $uri);
$greske = 0;
$tekst_greski = "";
$aktiviran=false;
if (count($aktivacijski_kod) == 2) {
    $aktivacijski_kod = $aktivacijski_kod[1];
    $trenutnoVrijeme = new dateTime(date("YmdHis"));
    $vrijemeKoda = new dateTime(substr($aktivacijski_kod, 0, 14));
    $razlika = date_diff($trenutnoVrijeme, $vrijemeKoda);

    $valjanAktKod = 0;
    if ($razlika->days == 0) {
        if ($razlika->h > 12) {
            $valjanAktKod++;         
        }
    } else {
        $valjanAktKod++;
    }
    if ($valjanAktKod === 0) {
        $sql = "SELECT * FROM aktivacijski_kod WHERE aktivacijski_kod='$aktivacijski_kod'";
        $rez = vrati_podatke($sql);
        if (($rez->num_rows) < 1) {
            $tekst_greski.="Aktivaijski link nije valjan!<br>";
        } else {
            while ($row = $rez->fetch_assoc()) {
                $arr = $row;
            }
            $korime = $korime = $arr["korime"];
            $sql2 = "SELECT * FROM korisnik WHERE korime='$korime'";
            $rez2 = vrati_podatke($sql2);
            while ($row = $rez2->fetch_assoc()) {
                $arr2 = $row;
            }

            if ($arr2["status"] == "on") {
                $tekst_greski.="Korisnički račun je već aktiviran!!<br>";
            } else {
                $sql = "UPDATE korisnik SET status='on' WHERE korime='$korime'";
                dodaj_u_bazu($sql);
                $tekst_greski.="Korisnički račun je aktiviran!";
                $aktiviran=true;
            }
        }
    }
    else{
        $tekst_greski.="Aktivacijski kod je istekao!<br>";
    }
}
else{
    $tekst_greski.="Aktivacijski link je poslan na email. Potrebno je aktivirati račun unutar 12h!<br>"; 
}

if($aktiviran==true){
    $tekst_greski="Korisnički račun je aktiviran!";
}
$smarty->assign('tekst',$tekst_greski);
$smarty->display('predlosci/aktivacija.tpl');
$smarty->display('predlosci/footer.tpl');
?>
